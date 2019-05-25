<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
	public $name;
	public $phone;
	public $description;

	public function rules()
	{
		return [

			[['name', 'phone', 'description'], 'trim'],
			[['name', 'phone',], 'required'],
			[['name'], 'string', 'min' => 2, 'max' => 30],
			[['description',], 'safe'],
			[['phone'], 'match', 'pattern' =>'/^[0-9\+\(\)\- ]+$/', 'message' => 'Формат: + 7 (999) 999 99 99, 99-99-99'],

		];
	}



}