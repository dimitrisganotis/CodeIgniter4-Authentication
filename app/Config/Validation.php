<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\App\Validation\CustomRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $registerRules = [
        'name' => [
			'rules' => 'required|alpha_numeric_punct|max_length[255]',
			'label' => 'Name',
		],
        'email' => [
			'rules' => 'required|valid_email|max_length[255]|is_unique[users.email]',
			'label' => 'Email Address',
		],
        'password' => [
			'rules' => 'required|min_length[8]|max_length[255]',
			'label' => 'Password',
		],
        'cofirm_password' => [
			'rules' => 'required|matches[password]',
			'label' => 'Confirm Password',
		],
	];

	public $loginRules = [
        'email' => [
			'rules' => 'required|valid_email',
			'label' => 'Email Address',
		],
        'password' => [
			'rules' => 'required|validateUser[email,password]',
			'label' => 'Password',
			'errors' => [
                'validateUser' => 'Incorrect username or password.'
            ]
		],

    ];
}
