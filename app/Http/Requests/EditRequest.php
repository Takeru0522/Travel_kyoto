<?php
class EditRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{

		return [
			'user_id' => 'required',
			'title' => 'required',
			/*~~~~~
			  省略
			~~~~~*/
		];
		
	}

	public function attributes() {
		
		return [
			'user_id' => '執筆者',
			'title' => 'タイトル',
			/*~~~~~
			  省略
			~~~~~*/
		];
		
	}
	
}