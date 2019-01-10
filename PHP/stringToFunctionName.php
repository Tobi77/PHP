<?php
field = 'additional_images';
 
$fieldMethod = str_replace('_', ' ', $field);
$fieldMethod = strtolower($fieldMethod);
$fieldMethod = ucwords($fieldMethod);
$fieldMethod = str_replace(' s', '', $fieldMethod);
$fieldMethod = 'get' . $fieldMethod;
 
//fieldMethod = getAdditionalImages
