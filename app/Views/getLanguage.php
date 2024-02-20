                                    <select id="language" name="language" class="nav-item form-select">
                          
                                        <?php foreach ($languagelist as $languagevalue) : ?>
                                           <?php if ($languagevalue->name == $defaultlang) : ?>
                                            
                                               <option value="<?php echo $languagevalue->name ?>" selected><?php echo $languagevalue->display_name; ?></option>
                                           <?php else : ?>
                                            
                                               <option value="<?php echo $languagevalue->name ?>"><?php echo $languagevalue->display_name; ?></option>
                                           <?php endif ?>
                                          
                                        <?php endforeach ?>
                                       </select>
                               
