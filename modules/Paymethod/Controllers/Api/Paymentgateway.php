<?php

namespace Modules\Paymethod\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;
use Modules\Paymethod\Libraries\SSLCommerz;
use Modules\Paymethod\Models\FlutterWave;
use Modules\Paymethod\Models\PaymentGatewayModel;
use Modules\Paymethod\Models\PaypalModel;
use Modules\Paymethod\Models\PaystackModel;
use Modules\Paymethod\Models\RazorModel;
use Modules\Paymethod\Models\SslCommerzModel;
use Modules\Paymethod\Models\StripeModel;
use \stdClass;

class Paymentgateway extends BaseController
{
    use ResponseTrait;

    protected $paymentGatewayModel;
    protected $razorModel;
    protected $payStackModel;
    protected $stripeModel;
    protected $paypalModel;
    protected $sslModel;
    protected $flutterWaveModel;
    protected $db;

    public function __construct()
    {
        $this->paymentGatewayModel = new PaymentGatewayModel();
        $this->razorModel = new RazorModel();
        $this->payStackModel = new PaystackModel();
        $this->stripeModel = new StripeModel();
        $this->paypalModel = new PaypalModel();
        $this->sslModel = new SslCommerzModel;
        $this->flutterWaveModel = new FlutterWave;

        $this->db = \Config\Database::connect();
    }

    public function paymentGateway()
    {
        $paymentGateway = $this->paymentGatewayModel->where('status', 1)->findAll();

        if (!empty($paymentGateway)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $paymentGateway,
            ];

            return $this->response->setJSON($data);
        } else {

            $data = [
                'message' => "No not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function paypal()
    {
        $paypaldata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(1);

        if (!empty($paymentGatewayStatus)) {

            $paypal = $this->paypalModel->first();

            if (!empty($paypal)) {

                if ($paypal->environment == 1) {
                    $paypaldata->secrate_id = $paypal->live_s_kye;
                    $paypaldata->client_id = $paypal->live_c_kye;
                    $paypaldata->email = $paypal->email;
                    $paypaldata->merchantid = $paypal->marchantid;
                    $paypaldata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paypaldata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paypaldata->secrate_id = $paypal->test_s_kye;
                    $paypaldata->client_id = $paypal->test_c_kye;
                    $paypaldata->email = $paypal->email;
                    $paypaldata->merchantid = $paypal->marchantid;
                    $paypaldata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paypaldata,
                    ];

                    return $this->response->setJSON($data);
                }
            } else {
                $data = [
                    'message' => "No Credential found for Paypal",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "Paypal is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }


    public function paystack()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(2);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->payStackModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;
                    $paydata->private_key = $getPayData->live_p_kye;
                    $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;
                    $paydata->private_key = $getPayData->test_p_kye;
                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                }
            } else {
                $data = [
                    'message' => "No Credential found for Paystack",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "Paystack is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }


    public function stripe()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(3);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->stripeModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;
                    $paydata->private_key = $getPayData->live_p_kye;
                    $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;
                    $paydata->private_key = $getPayData->test_p_kye;
                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                }
            } else {
                $data = [
                    'message' => "No Credential found for Stripe",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "Stripe is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function razor()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(4);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->razorModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;

                    $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;

                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                }
            } else {
                $data = [
                    'message' => "No Credential found for RazorPay",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "RazorPay is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function flutterWave()
    {
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(6);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->flutterWaveModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => [
                            'public_key' => $getPayData->live_public_key,
                            'secret_key' => $getPayData->live_secret_key,
                            'encryption_key' => $getPayData->live_encryption_key,
                            'environment' => "Live"
                        ],
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => [
                            'public_key' => $getPayData->test_public_key,
                            'secret_key' => $getPayData->test_secret_key,
                            'encryption_key' => $getPayData->test_encryption_key,
                            'environment' => "Test"
                        ],
                    ];

                    return $this->response->setJSON($data);
                }
            } else {
                $data = [
                    'message' => "No Credential found for Flutterwave",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "Flutterwave is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function sslCommerz()
    {
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(5);

        if (!empty($paymentGatewayStatus)) {
            $getPayData = $this->sslModel->first();

            if (!empty($getPayData)) {
                // Collect credintial from model
                $sslStoreId = $getPayData->ssl_store_id;
                $sslStorePassword = $getPayData->ssl_store_password;
                $sslPaymentEnvironment = $getPayData->environment;

                // initialize sslcommerz instance
                $ssl = new SSLCommerz($sslStoreId, $sslStorePassword, !$sslPaymentEnvironment);

                // build checkout data
                $postedData = $this->request->getPost();

                if (!isset($postedData['callback_url'])) {
                    return $this->response->setJSON(['status' => "failed", 'response' => 204, 'message' => 'Callback url missing']);
                }

                $postedData['success_url'] = base_url(route_to('ssl-payment-callback'));
                $postedData['fail_url']    = base_url(route_to('ssl-payment-callback'));
                $postedData['cancel_url']  = base_url(route_to('ssl-payment-callback'));
                $postedData['value_a']     = $postedData['callback_url'];

                $paydata = $ssl->easyCheckout($postedData);

                if (!empty($ssl->error)) {
                    return $this->response->setJSON(['status' => "failed", 'response' => 204, 'message' => $ssl->error]);
                }

                return $this->response->setJSON(['status' => "success", 'response' => 200, 'data' => $paydata]);
            } else {
                $data = [
                    'message' => "No Credential found for ssl commerz",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {
            $data = [
                'message' => "SSL Commerz is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function sslCommerzValidate()
    {
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(5);

        if (!empty($paymentGatewayStatus)) {
            $getPayData = $this->sslModel->first();

            if (!empty($getPayData)) {
                // Collect credintial from model
                $sslStoreId = $getPayData->ssl_store_id;
                $sslStorePassword = $getPayData->ssl_store_password;
                $sslPaymentEnvironment = $getPayData->environment;

                // initialize sslcommerz instance
                $ssl = new SSLCommerz($sslStoreId, $sslStorePassword, !$sslPaymentEnvironment);

                // build validation data
                $postedData = $this->request->getPost();

                if (!isset($postedData['data'])) {
                    // invalid posted data
                    return $this->response->setJSON(['status' => "failed", 'response' => 204, 'message' => 'data not found']);
                }

                try {
                    // parse jwt token
                    $validatedData = JWT::decode($postedData['data'], getenv('TOKEN_SECRET'), ["HS256"]);
                    $paydata = $ssl->validateResponse((array) $validatedData);
                } catch (\Exception $e) {
                    return $this->response->setJSON(['status' => "failed", 'response' => 204, 'message' => $e->getMessage()]);
                }

                if ($paydata === false) {
                    return $this->response->setJSON(['status' => "failed", 'response' => 204, 'message' => $ssl->error]);
                }

                return $this->response->setJSON(['status' => "success", 'response' => 200, 'valid' => true, 'data' => $ssl->getGatewayResponse()]);
            } else {
                $data = [
                    'message' => "No Credential found for ssl commerz",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }
        } else {
            $data = [
                'message' => "SSL Commerz is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function sslCommerzCallback()
    {
        // collect posted data
        $postedData = $this->request->getPost();

        if (!isset($postedData) || !isset($postedData['value_a'])) {
            // invalid posted data
            return "Invalid data parsed";
        }

        // build query parameter
        $param['session'] = uniqid() . uniqid();

        // build base url
        $base = $postedData['value_a'];

        // build default payment data
        $paymentData = ['status' => 'failed', 'val_id' => null, 'amount' => null, 'currency' => null];

        if (isset($postedData['val_id']) && isset($postedData['amount']) && isset($postedData['currency'])) {
            $paymentData = array(
                'status' => $postedData['status'],
                'val_id' => $postedData['val_id'],
                'amount' => $postedData['amount'],
                'currency' => $postedData['currency']
            );
        }

        $param['data'] = JWT::encode($paymentData, getenv('TOKEN_SECRET'));
        $redirectUrl = $base . '?' .  http_build_query($param);
        return redirect()->to($redirectUrl);
    }
}
