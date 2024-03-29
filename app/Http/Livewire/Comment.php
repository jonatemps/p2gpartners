<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;


    public $name;
    public $email;
    public $content;
    public $candidate;
    public $nameReplay;
    public $emailReplay;
    public $contentReplay;


    protected $paginationTheme = 'bootstrap';



    public function mount(Request $request){

        if (isset($_COOKIE['OurUserName']) && isset($_COOKIE['OurUserEmail'])) {
            $this->nameReplay = $_COOKIE['OurUserName'];
            $this->emailReplay = $_COOKIE['OurUserEmail'];
        }

        $this->candidate = request('candidate');
        // dd($this->candidate_id);
    }

    public function submit(Request $request)
    {

        // if (Session::get('user_name')) {
        //     # code...
        // }
        $comment =new  ModelsComment();


        if (!isset($_COOKIE['OurUserName']) && !isset($_COOKIE['OurUserEmail'])) {
            $validatedData = $this->validate([
                'name' => 'required|min:6',
                'email' => 'required|email',
                'content' => 'required',
            ]);
            $comment->fill($validatedData);

        } else {
            $validatedData = $this->validate([
                'content' => 'required',
            ]);
            $comment->fill($validatedData);
            $comment->name = $_COOKIE['OurUserName'];
            $comment->email = $_COOKIE['OurUserEmail'];
        }




        if (!isset($_COOKIE['OurUserName']) && !isset($_COOKIE['OurUserEmail'])) {
            $cookie_name = "OurUserName";
            $cookie_value = $validatedData['name'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
            $cookie_name = "OurUserEmail";
            $cookie_value = $validatedData['email'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
        }



        // $comment->fill($validatedData);
        $cadidate_id = $this->candidate->id;
        $comment->candidate_id = $cadidate_id;
        // dd(isset($_COOKIE['OurUserName']),$_COOKIE['OurUserName'],$_COOKIE['OurUserEmail']);
        // dd($comment);
        $comment->save();

        // $this->content = '';

        return redirect(request()->header('Referer'));
    }

    public function saveReplay($comment_id)
    {
        $comment = new  ModelsComment();

        if (!isset($_COOKIE['OurUserName']) && !isset($_COOKIE['OurUserEmail'])) {
            $validatedData = $this->validate([
                'nameReplay' => 'required|min:6',
                'emailReplay' => 'required|email',
                'contentReplay' => 'required',
            ]);
            $comment->fill($validatedData);

        } else {
            $validatedData = $this->validate([
                'contentReplay' => 'required',
            ]);
            $comment->content = $validatedData['contentReplay'];
            $comment->name = $_COOKIE['OurUserName'];
            $comment->email = $_COOKIE['OurUserEmail'];
        }

        $comment->candidate_id = $this->candidate->id;
        $comment->comment_id = $comment_id;

        // dd($comment);
        $comment->save();

        return redirect(request()->header('Referer'));
    }

    public function setCookieUser($name,$request){
        $minutes = 10;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name222', 'MyValue', $minutes));
        return $response;
    }


    public function render()
    {
        // $comments = $this->candidate->comments->where('comment_id',null)->simplePaginate(2);
        $comments = ModelsComment::where('comment_id',null)->where('candidate_id',$this->candidate->id)->paginate(2);

        // dd($comments);
        // $cookie = cookie('name', 'value', 1);


        // return response(view('livewire.comment',[
        //     'comments' => $comments
        // ]))->cookie('name','value',1);

        return view('livewire.comment',[
            'comments' => $comments
        ]);
    }


    public function nextPage(){
        $this->nextPageUrl();
    }

    public function previousPage(){
        $this->previousPage();
    }
}
