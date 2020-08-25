<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function store($id, EditRequest $request)
	{
	
		// ※1
		if(is_numeric($id)){
			$edit = Edit::find($id);
		}else{
			return redirect()->back()->withInput($request->input());
		}

		// ※2
		foreach($edit->getAttributes() as $column => $value){
			if( isset($request[$column]) ){
				// array -> comma implode
				if( is_array($request[$column]) ){
					$request[$column] = implode(',', $request[$column]);
				}
				// set
				$edit[$column] = $request[$column];
			}
		}

		// ※3
	
		// 保存する
		if( $edit->save() ){ // 戻り値はbool（保存の結果）
			return redirect()->action("EditController@edit", ['id' => $edit->id])->with('success-msg', 'SUCCESS：データを保存しました！');
		}else{
			return redirect()->back()->withInput($request->Input())->withErrors(['予期せぬエラーが発生しました！', '保存が失敗した可能性があります。念のためローカルにデータをコピーしておいてください。']);
		}

	}

}
