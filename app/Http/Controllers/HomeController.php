<?php

namespace App\Http\Controllers;

use App\Http\Utilities\Utility;
use App\Models\Award;
use App\Models\Competition;
use App\Models\Event;
use App\Models\Media;
use App\Models\Project;
use App\Models\Research;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recentWorkshop = Event::orderByDesc('id')->where('type',Utility::EVENT_TYPE_WORKSHOP)->where('status',Utility::ITEM_ACTIVE)->first();
        return view('front.pages.home',compact('recentWorkshop'));

    }

    public function about()
    {
        return view('front.pages.about');

    }

    public function workshops_upcoming()
    {
        $type = 'Upcoming';
        $workshops = Event::orderByDesc('id')->where('type',Utility::EVENT_TYPE_WORKSHOP)->where('status',Utility::ITEM_ACTIVE)->where('completed','!=',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.workshops',compact('workshops','type'));
    }

    public function workshops_completed()
    {
        $type = 'Completed';
        $workshops = Event::orderByDesc('id')->where('type',Utility::EVENT_TYPE_WORKSHOP)->where('status',Utility::ITEM_ACTIVE)->where('completed',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.workshops',compact('workshops','type'));
    }

    public function events()
    {
        $events = Event::orderByDesc('id')->where('type',Utility::EVENT_TYPE_EVENT)->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.events',compact('events'));
    }

    public function campigns()
    {
        $events = Event::orderByDesc('id')->where('type',Utility::EVENT_TYPE_CAMPIGN)->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.campigns',compact('events'));
    }

    public function workshop_detail($id) {
        $type = 'Workshop';
        $event = Event::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentEvents = Event::orderByDesc('id')->where('id','!=',decrypt($id))->where('type',Utility::EVENT_TYPE_WORKSHOP)->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.details',compact('event','recentEvents','type'));
    }

    public function event_detail($id) {
        $type = 'Event';
        $event = Event::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentEvents = Event::orderByDesc('id')->where('id','!=',decrypt($id))->where('type',Utility::EVENT_TYPE_EVENT)->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.details',compact('event','recentEvents','type'));
    }

    public function campign_detail($id) {
        $type = 'Campign';
        $event = Event::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentEvents = Event::orderByDesc('id')->where('id','!=',decrypt($id))->where('type',Utility::EVENT_TYPE_CAMPIGN)->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.details',compact('event','recentEvents','type'));
    }

    public function projects()
    {
        // $projects = Project::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        $projects = Project::where('type',Utility::PROJECT_TYPE_ACTIVE)->orderBy('id')->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.projects',compact('projects'));
    }

    public function project_detail($id) {
        $project = Project::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentProjects = Project::orderByDesc('id')->where('id','!=',decrypt($id))->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.project_details',compact('project','recentProjects'));
    }

    public function upcoming_projects()
    {
        $projects = Project::where('type',Utility::PROJECT_TYPE_UPCOMING)->orderBy('id')->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.projects',compact('projects'));
    }

    public function researches()
    {
        $researches = Research::orderBy('id')->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);;
        return view('front.pages.researches',compact('researches'));
    }

    public function research_detail($id) {
        $research = Research::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentResearches = Research::orderByDesc('id')->where('id','!=',decrypt($id))->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.research_details',compact('research','recentResearches'));
    }

    public function awards()
    {
        $awards = Award::orderBy('id')->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.awards',compact('awards'));
    }

    public function award_detail($id) {
        $award = Award::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentAwards = Award::orderByDesc('id')->where('id','!=',decrypt($id))->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.award_details',compact('award','recentAwards'));
    }

    public function competitions()
    {
        $competitions = Competition::orderBy('id')->where('status',Utility::ITEM_ACTIVE)->paginate(Utility::PAGINATE_COUNT);
        return view('front.pages.competitions',compact('competitions'));
    }

    public function competition_detail($id) {
        $competition = Competition::where('status',Utility::ITEM_ACTIVE)->findOrFail(decrypt($id));
        $recentCompetitions = Competition::orderByDesc('id')->where('id','!=',decrypt($id))->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
        return view('front.pages.competition_details',compact('competition','recentCompetitions'));
    }

    public function media()
    {
        $medias = Media::all();
        return view('front.pages.media',compact('medias'));

    }

    public function contact()
    {
        return view('front.pages.contact');

    }

    public function urvi_kosa()
    {
        return view('front.pages.urvi_kosa');

    }

    public function index1(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        return view('index');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

}
