<?php

namespace App\Http\Livewire;

use App\Models\Interaction;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use Browser;


class Counter extends Component
{
    public $countLike = 0;
    public $countDislike = 0;
    public $CountVue = 0;
    public $CountComment;
    public $candidate_id;
    public $interaction;





    public function mount(Request $request)
    {
        // dd($_COOKIE['isDisliked']);
        // setcookie('isLike', 'no', time() + 7776000);
        $this->candidate_id = request('candidate')->id;
        $this->interaction = Interaction::where('candidate_id',$this->candidate_id)->first();

        $this->countLike = $this->interaction->like ?? 0;
        $this->countDislike = $this->interaction->dislike ?? 0;
        $this->CountVue = $this->interaction->seen ?? 0;

        // $this->countLike = $this->countLike->like;
        // setcookie('HaveSee', 'yes', time() + 7776000);

        // dd(Browser::browserName().' '.Browser::platformFamily().' '.Browser::deviceFamily().' '.Browser::deviceModel().' '.Browser::mobileGrade());
        $ourUser = Browser::browserName().' '.Browser::platformFamily().' '.Browser::deviceFamily().' '.Browser::deviceModel().' '.Browser::mobileGrade();
        // setcookie('HaveSee', $ourUser, time() + 9);

        // dd(isset($_COOKIE['HaveSee']));
        if (!isset($_COOKIE['HaveSee'])) {
            setcookie('ourUser', $ourUser, time() + 7776000);
            setcookie('HaveSee', 'yes', time() + 7776000);

            $interaction = Interaction::firstOrCreate(
                ['candidate_id' => request('candidate')->id]
            );
            $interaction->seen++;
            $interaction->save();
            $this->CountVue = $interaction->seen;
        }

        // dd($interaction);
        // dd(request('candidate')->interactions);
        $this->CountComment = request('candidate')->comments->count();

        $this->CountVue++;
    }

    public function like()
    {
        // dd(isset($_COOKIE['isLike']),$_COOKIE['isLike'] == 'yes');


            $interaction = Interaction::where('candidate_id',$this->candidate_id)->first();

            if (!isset($_COOKIE['isLike'])) {
                setcookie('isLike', 'yes', time() + 7776000);
                $interaction->like++;
            }
            // setcookie('isLike', 'no', time() + 7773000);
            // dd($_COOKIE['isLike'] != 'yes');
            (isset($_COOKIE['isLike']) && $_COOKIE['isLike'] != 'yes') ? $interaction->like++ : '';
            setcookie('isLike', 'yes', time() + 7776000);
            (isset($_COOKIE['isDisliked']) && $_COOKIE['isDisliked'] == 'yes') ? $interaction->dislike-- : '';
            setcookie('isDisliked', 'no', time() + 7775000);
            $interaction->save();
            $this->countLike = $interaction->like;
            $this->countDislike = $interaction->dislike;
    }

    public function dislike()
    {

        $interaction = Interaction::where('candidate_id',$this->candidate_id)->first();

        if (!isset($_COOKIE['isDisliked'])) {
            setcookie('isDisliked', 'yes', time() + 7776000);
            $interaction->dislike++;
        }
        // setcookie('isLike', 'no', time() + 7772000);
        // dd($_COOKIE['isLike'] != 'yes');
        (isset($_COOKIE['isDisliked']) && $_COOKIE['isDisliked'] != 'yes') ? $interaction->dislike++ : '';
        setcookie('isDisliked', 'yes', time() + 7776000);
        (isset($_COOKIE['isLike']) && $_COOKIE['isLike'] == 'yes') ? $interaction->like-- : '';
        setcookie('isLike', 'no', time() + 7774000);
        $interaction->save();
        $this->countLike = $interaction->like;
        $this->countDislike = $interaction->dislike;
        // $this->countDislike++;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
