
<?php 
 $session = \Config\Services::session(); 
?>
                               <?php $defaultlang = $session->lang  ;?>

                                      
                                       <select id="language" name="language" class="nav-item form-select w-auto me-1">
                                        <?php foreach ($languagelist as $languagevalue) : ?>
                                           <?php if ($languagevalue->language_code == $defaultlang) : ?>
                                               <option value="<?php echo $languagevalue->language_code ?>" selected><?php echo $languagevalue->display_name; ?></option>
                                           <?php else : ?>
                                               <option value="<?php echo $languagevalue->language_code ?>"><?php echo $languagevalue->display_name; ?></option>
                                           <?php endif ?>
                                          
                                        <?php endforeach ?>
                                       </select>


                                       