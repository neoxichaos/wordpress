<?php 
if(function_exists("register_field_group"))
{
register_field_group(array (
'id' => 'acf_membres',
'title' => 'membres',
'fields' => array (
array (
'key' => 'field_5a5e0603b42a7',
'label' => 'photo de profil',
'name' => 'photo_de_profil',
'type' => 'image',
'save_format' => 'url',
'preview_size' => 'thumbnail',
'library' => 'all',
),
array (
'key' => 'field_5a5e0a7db42a8',
'label' => 'Profession',
'name' => 'profession',
'type' => 'select',
'required' => 1,
'choices' => array (
'Directeur' => 'Directeur',
'Employé' => 'Employé',
'Assistant' => 'Assistant',
'Développeur' => 'Développeur',
'Web Designer' => 'Web Designer',
),
'default_value' => '',
'allow_null' => 0,
'multiple' => 0,
),
array (
'key' => 'field_5a5e0ac7b42a9',
'label' => 'Nom',
'name' => 'nom',
'type' => 'text',
'required' => 1,
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'formatting' => 'html',
'maxlength' => '',
),
array (
'key' => 'field_5a5e0b14b42aa',
'label' => 'Prénom',
'name' => 'prenom',
'type' => 'text',
'required' => 1,
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'formatting' => 'html',
'maxlength' => '',
),
array (
'key' => 'field_5a5e0b24b42ab',
'label' => 'Description',
'name' => 'description',
'type' => 'textarea',
'required' => 1,
'default_value' => '',
'placeholder' => '',
'maxlength' => '',
'rows' => '',
'formatting' => 'br',
),
),
'location' => array (
array (
array (
'param' => 'post_category',
'operator' => '==',
'value' => '3',
'order_no' => 0,
'group_no' => 0,
),
),
),
'options' => array (
'position' => 'normal',
'layout' => 'no_box',
'hide_on_screen' => array (
0 => 'the_content',
),
),
'menu_order' => 0,
));
}