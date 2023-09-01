<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class memberController extends Controller
{
    /**
     * ユーザ一覧
     * 
     * @param Request $request
     * @return Response
     * 
     */
    public function index(Request $request)
    {
        $members = Member::orderBy('created_at', 'asc')->get();
        return view('members.index',[
            'members' => $members,
        ]);
    }

    public function registration(Request $request)
    {
        return view('members.registration');
    }

    public function edit(Request $request)
    {
        $member = Member::where('id', '=',$request->id)->first();

        return view('members.edit')->with([
            'member' => $member,
        ]);
    }

    public function memberEdit(Request $request,Member $member)
    {
        $member = Member::where('id', '=', $request->id)->first();
        $member ->name = $request->name;
        $member ->tel = $request->tel;
        $member ->email = $request->email;
        $member ->save();

        return redirect('/members');
    }

     /**
     * メンバ削除
     * @param Request $request
     * @param member $member
     * @return Response
     */

     public function memberDelete(Request $request)
     {
        $member = Member::where('id', '=', $request->id)->first();
        $member->delete();

        return redirect('/members');
     }

    /**
     * メンババリゲート
     * 
     * @param Request $request
     * @return Response
     * 
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'tel' => 'required|max:20',
            'email' => 'required',
        ]);

        // メンバ作成
        $member = new Member();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('/members'); 

    }

    // public function error(Request $request)
    // {
    //     $members = NULL;

    //     if (is_null($members)){
    //       echo 'NULLです。';
    //     }else{
    //       echo 'NULLではありません。';
    //     }
    //     return view('members.error');

    // }

}