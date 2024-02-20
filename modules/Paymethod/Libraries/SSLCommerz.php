<?php

namespace Modules\Paymethod\Libraries;

class SSLCommerz
{
    protected $is_sandbox;
    protected $sslc_submit_url;
    protected $sslc_validation_url;
    protected $sslc_mode;
    protected $sslc_data;
    protected $store_id;
    protected $store_pass;
    public $error = '';

    public function __construct(string $store_id, string $store_pass, bool $is_sandbox = true)
    {
        // build ssl environment
        $this->is_sandbox = $is_sandbox;
        $this->store_id = $store_id;
        $this->store_pass = $store_pass;

        $this->setSSLCommerzMode();

        $this->sslc_submit_url = "https://" . $this->sslc_mode . ".sslcommerz.com/gwprocess/v4/api.php";
        $this->sslc_validation_url = "https://" . $this->sslc_mode . ".sslcommerz.com/validator/api/validationserverAPI.php";
    }

    public function easyCheckout($post_data)
    {
        if ($post_data != '' && is_array($post_data)) {
            $post_data['store_id'] = $this->store_id;
            $post_data['store_passwd'] = $this->store_pass;

            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $this->sslc_submit_url);
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

            $content = curl_exec($handle);

            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

            if ($code == 200 && !(curl_errno($handle))) {
                curl_close($handle);
                $sslcommerzResponse = $content;

                # PARSE THE JSON RESPONSE
                if ($this->sslc_data = json_decode($sslcommerzResponse, true)) {
                    if (isset($this->sslc_data['status']) && $this->sslc_data['status'] == 'SUCCESS') {
                        if (isset($this->sslc_data['GatewayPageURL']) && $this->sslc_data['GatewayPageURL'] != "") {
                            if ($this->is_sandbox) {
                                return ['data' => $this->sslc_data['GatewayPageURL'], 'logo' => $this->sslc_data['storeLogo']];
                            }

                            return ['data' => $this->sslc_data['GatewayPageURL'], 'logo' => $this->sslc_data['storeLogo']];
                        }

                        return $this->error = "No redirect URL found!";
                    }

                    return $this->error = $this->sslc_data['failedreason'];
                }

                return $this->error = "JSON Data parsing error!";
            }

            curl_close($handle);
            return $this->error = "Failed to connect with API.";
        }

        return $this->error = "Posted data invalid";
    }

    # SET SSLCOMMERZ PAYMENT MODE - LIVE OR TEST
    protected function setSSLCommerzMode()
    {
        if ($this->is_sandbox) {
            $this->sslc_mode = "sandbox";
        } else {
            $this->sslc_mode = "securepay";
        }
    }

    public function validateResponse($post_data)
    {
        if ($post_data == '' && !is_array($post_data)) {
            $this->error = "Please provide valid transaction ID and post request data";
            return false;
        }

        if (!isset($post_data['amount']) || !isset($post_data['currency'])) {
            $this->error = "Invalid amount or currency";
            return false;
        }

        return $this->validation($post_data['amount'], $post_data['currency'], $post_data);
    }

    protected function validation($merchant_trans_amount, $merchant_trans_currency, $post_data)
    {
        # MERCHANT SYSTEM INFO
        if ($merchant_trans_amount != 0) {

            # CALL THE FUNCTION TO CHECK THE RESULT
            $post_data['store_id'] = $this->store_id;
            $post_data['store_pass'] = $this->store_pass;

            $val_id = urlencode($post_data['val_id']);
            $store_id = urlencode($this->store_id);
            $store_passwd = urlencode($this->store_pass);

            $requested_url = sprintf("%s?val_id=%s&store_id=%s&store_passwd=%s&v=1&format=json", $this->sslc_validation_url, $val_id, $store_id, $store_passwd);

            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $requested_url);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($handle);
            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

            if ($code == 200 && !(curl_errno($handle))) {

                # TO CONVERT AS ARRAY
                # $result = json_decode($result, true);
                # $status = $result['status'];

                # TO CONVERT AS OBJECT
                $result = json_decode($result);
                $this->sslc_data = $result;

                # TRANSACTION INFO
                $status = $result->status;
                $tran_date = $result->tran_date;
                $tran_id = $result->tran_id;
                $val_id = $result->val_id;
                $amount = $result->amount;
                $store_amount = $result->store_amount;
                $bank_tran_id = $result->bank_tran_id;
                $card_type = $result->card_type;
                $currency_type = $result->currency_type;
                $currency_amount = $result->currency_amount;

                # ISSUER INFO
                $card_no = $result->card_no;
                $card_issuer = $result->card_issuer;
                $card_brand = $result->card_brand;
                $card_issuer_country = $result->card_issuer_country;
                $card_issuer_country_code = $result->card_issuer_country_code;

                # API AUTHENTICATION
                $APIConnect = $result->APIConnect;
                $validated_on = $result->validated_on;
                $gw_version = $result->gw_version;

                # GIVE SERVICE
                if ($status == "VALID" || $status == "VALIDATED") {
                    if ($merchant_trans_currency == "BDT") {
                        if ((abs($merchant_trans_amount - $amount) < 1) && trim($merchant_trans_currency) == trim('BDT')) {
                            return true;
                        } else {
                            # DATA TEMPERED
                            $this->error = "Data has been tempered";
                            return false;
                        }
                    } else {
                        if ((abs($merchant_trans_amount - $currency_amount) < 1) && trim($merchant_trans_currency) == trim($currency_type)) {
                            return true;
                        } else {
                            # DATA TEMPERED
                            $this->error = "Data has been tempered";
                            return false;
                        }
                    }
                } else {
                    # FAILED TRANSACTION
                    $this->error = "Failed Transaction";
                    return false;
                }
            } else {
                # Failed to connect with SSLCOMMERZ
                $this->error = "Failed to connect with SSLCOMMERZ";
                return false;
            }
        } else {
            # INVALID DATA
            $this->error = "Invalid data";
            return false;
        }
    }

    public function ipn_request($store_password, $postdata = array())
    {
        $password = $this->store_pass;
        $store_id = $this->store_id;
        $tran_id = $_POST['tran_id'];
        if (isset($_POST['val_id'])) {
            $val_id = $_POST['val_id'];
        }
        $status = $_POST['status'];

        if ($store_password == $password && is_array($postdata)) {
            $other_state['gateway_return'] = $postdata;
            if ($status == 'FAILED') {
                $other_state['ipn_result'] = array(
                    'hash_validation_status' => 'SUCCESS',
                    'reason' => 'Order FAILED by IPN.'
                );
                return $other_state;
            } elseif ($status == 'CANCELLED') {
                $other_state['ipn_result'] = array(
                    'hash_validation_status' => 'SUCCESS',
                    'reason' => 'Order CANCELLED by IPN.'
                );
                return $other_state;
            } elseif ($status == 'VALID' || $status == 'VALIDATED') {
                $valid_url_own = ($this->sslc_validation_url . "?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $password . "&v=1&format=json");

                $handle = curl_init();
                curl_setopt($handle, CURLOPT_URL, $valid_url_own);
                curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

                $result = curl_exec($handle);

                $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

                if ($code == 200 && !(curl_errno($handle))) {
                    $result = json_decode($result);
                    $ipn_return = array(
                        'gateway_return' => array(
                            'APIConnect' => $result->APIConnect,
                            'tran_id' => $result->tran_id,
                            'amount' => $result->amount,
                            'card_type' => $result->card_type,
                            'store_amount' => $result->store_amount,
                            'bank_tran_id' => $result->bank_tran_id,
                            'status' => $result->status,
                            'tran_date' => $result->tran_date,
                            'currency' => $result->currency,
                            'card_issuer' => $result->card_issuer,
                            'card_brand' => $result->card_brand,
                            'card_issuer_country' => $result->card_issuer_country,
                            'card_issuer_country_code' => $result->card_issuer_country_code,
                            'store_id' => $store_id,
                            'verify_sign' => $_POST['verify_sign'],
                            'currency_type' => $result->currency_type,
                            'currency_amount' => $result->currency_amount,
                            'risk_level' => $result->risk_level,
                            'risk_title' => $result->risk_title,
                            'token_key' => $result->token_key,
                            'validated_on' => $result->validated_on
                        ),
                        'ipn_result' => array(
                            'hash_validation_status' => '',
                            'reason' => ''
                        )
                    );

                    if ($_POST['currency_amount'] == $result->currency_amount) {
                        if ($result->status == 'VALIDATED' || $result->status == 'VALID') {
                            if ($_POST['card_type'] != "") {
                                $ipn_return['ipn_result']['hash_validation_status'] = 'SUCCESS';
                                $ipn_return['ipn_result']['reason'] = 'IPN Triggered & Hash valodation success.';
                            } else {
                                $ipn_return['ipn_result']['hash_validation_status'] = 'FAILED';
                                $ipn_return['ipn_result']['reason'] = 'Card Type Empty or Mismatched.';
                            }
                        } else {
                            $ipn_return['ipn_result']['hash_validation_status'] = 'FAILED';
                            $ipn_return['ipn_result']['reason'] = 'Your Validation id could not be Verified.';
                        }
                    } else {
                        $ipn_return['ipn_result']['hash_validation_status'] = 'FAILED';
                        $ipn_return['ipn_result']['reason'] = 'Your Paid Amount is Mismatched.';
                    }

                    return $ipn_return;
                }
            }
        }
    }

    public function getGatewayResponse()
    {
        return $this->sslc_data;
    }
}
