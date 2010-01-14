<?php
/**
 * Custom Fields and Taxonomies
 *
 * Auto create custom fields and taxonomies
 *
 * @package RoloPress
 */


//TODO - We should make the contact_fields array plugable.
//TODO - The meta key name should be added to the contact_fields array.
$contact_fields =
array
(
    "first_name" =>
    array
    (
    'name' => 'first_name',
    'class' => 'first_name',
    'filter' => "rolo_contact_first_name",
    'default_value' => '',
    'title' => "First Name",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => true
    ),
    "last_name"=>
    array
    (
    'name' => 'last_name',
    'class' => 'last_name',
    'filter' => "rolo_contact_last_name",
    'default_value' => '',
    'title' => "Last Name",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => true
    ),
    'title' =>
    array
    (
    'name' => 'title',
    'class' => 'title',
    'filter' => "rolo_contact_title",
    'default_value' => '',
    'title' => 'Title',
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => false
    ),
    "company" =>
    array
    (
    'name' => 'company',
    'class' => 'company',
    'filter' => "rolo_contact_company",
    'default_value' => '',
    'title' => "Company",
    'description' => '',
    'setup_function' => 'rolo_setup_contact_company',
    'save_function' => 'rolo_save_contact_company',
    'mandatory' => false
    ),
    "email" =>
    array
    (
    'name' => 'email',
    'class' => 'email',
    'filter' => "rolo_contact_email",
    'default_value' => '',
    'title' => "Email",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => false
    ),
    "phone" =>
    array
    (
    'multiple' => array ('Home', 'Mobile', 'Work', 'Fax', 'Other'),
    'name' => 'phone',
    'class' => 'phone',
    'filter' => "rolo_contact_phone_",
    'default_value' => '',
    'title' => "Phone",
    'description' => '',
    'setup_function' => 'rolo_setup_contact_multiple',
    'save_function' => 'rolo_save_contact_multiple',
    'mandatory' => false
    ),
    "website" =>
    array
    (
    'name' => 'website',
    'class' => 'website',
    'filter' => "rolo_contact_website",
    'default_value' => "",
    'title' => "Website",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
	'prefix' => 'http://',
    'mandatory' => false
    ),
    'im' =>
    array
    (
    'multiple' => array ('Yahoo', 'MSN', 'AOL', 'GTalk', 'Skype'),
    'name' => 'im',
    'class' => 'im',
    'filter' => "rolo_contact_IM_",
    'default_value' => '',
    'title' => "IM",
    'description' => '',
    'setup_function' => 'rolo_setup_contact_multiple',
    'save_function' => 'rolo_save_contact_multiple',
    'mandatory' => false
    ),
    'twitter' =>
    array
    (
    'name' => 'twitter',
    'class' => 'twitter',
    'filter' => "rolo_contact_twitter",
    'default_value' => "",
    'title' => "Twitter",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
	'prefix' => 'http://twitter.com/',
    'mandatory' => false
    ),
    "address" =>
    array
    (
    'name' => 'address',
    'class' => 'address',
    'filter' => "rolo_contact_address",
    'default_value' => '',
    'title' => "Address",
    'description' => '',
    "setup_function" => 'rolo_setup_contact_address',
    'save_function' => 'rolo_save_contact_address',
    'mandatory' => false
    ),
    'info' =>
    array
    (
    'name' => 'info',
    'class' => 'info',
    'filter' => "rolo_contact_info",
    'default_value' => '',
    'title' => "Background Info",
    'description' => '',
    'setup_function' => 'rolo_setup_contact_info',
    'save_function' => 'rolo_save_contact_info',
    'mandatory' => false
    )
);

$company_fields =
array
(
    'name' =>
    array
    (
    'name' => 'name',
    'class' => 'name',
    'filter' => "rolo_company_name",
    'default_value' => '',
    'title' => "Company name",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => true
    ),
    "email" =>
    array
    (
    'name' => 'email',
    'class' => 'email',
    'filter' => "rolo_company_email",
    'default_value' => '',
    'title' => "Email",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
    'mandatory' => false
    ),
    "phone" =>
    array
    (
    'multiple' => array ('Work', 'Mobile', 'Fax', 'Other'),
    'name' => 'phone',
    'class' => 'phone',
    'filter' => "rolo_company_phone_",
    'default_value' => '',
    'title' => "Phone",
    'description' => '',
    'setup_function' => 'rolo_setup_company_multiple',
    'save_function' => 'rolo_save_company_multiple',
    'mandatory' => false
    ),
    "website" =>
    array
    (
    'name' => 'website',
    'class' => 'website',
    'filter' => "rolo_company_website",
    'default_value' => "",
    'title' => "Website",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
	'prefix' => 'http://',
    'mandatory' => false
    ),
    'im' =>
    array
    (
    'multiple' => array ('Yahoo', 'MSN', 'AOL', 'GTalk', 'Skype'),
    'name' => 'im',
    'class' => 'im',
    'filter' => "rolo_company_IM_",
    'default_value' => '',
    'title' => "IM",
    'description' => '',
    'setup_function' => 'rolo_setup_company_multiple',
    'save_function' => 'rolo_save_company_multiple',
    'mandatory' => false
    ),
    'twitter' =>
    array
    (
    'name' => 'twitter',
    'class' => 'twitter',
    'filter' => "rolo_company_twitter",
    'default_value' => "",
    'title' => "Twitter",
    'description' => '',
    'setup_function' => '',
    'save_function' => '',
	'prefix' => 'http://twitter.com/',
    'mandatory' => false
    ),
    "address" =>
    array
    (
    'name' => 'address',
    'class' => 'address',
    'filter' => "rolo_company_address",
    'default_value' => '',
    'title' => "Address",
    'description' => '',
    "setup_function" => 'rolo_setup_company_address',
    'save_function' => 'rolo_save_company_address',
    'mandatory' => false
    ),
    'info' =>
    array
    (
    'name' => 'info',
    'class' => 'info',
    'filter' => "rolo_company_info",
    'default_value' => '',
    'title' => "Background Info",
    'description' => '',
    'setup_function' => 'rolo_setup_company_info',
    'save_function' => 'rolo_save_company_info',
    'mandatory' => false
    )
);

/**
 * Create taxonomies
 * @since 0.1
 */
function rolo_create_taxonomy() {
    register_taxonomy( 'type', 'post', array( 'hierarchical' => false, 'label' => __('Rolopress Type', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'company', 'post', array( 'hierarchical' => false, 'label' => __('Company', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'city', 'post', array( 'hierarchical' => false, 'label' => __('City', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'state', 'post', array( 'hierarchical' => false, 'label' => __('State', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'zip', 'post', array( 'hierarchical' => false, 'label' => __('Zip', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'country', 'post', array( 'hierarchical' => false, 'label' => __('Country', 'rolopress'), 'query_var' => true, 'rewrite' => true ) );
}
add_action('init', 'rolo_create_taxonomy', 0);

?>