<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Frontend\CategoryController;
use Session;
use Locale;
use Cookie;
use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Session\Store;
use JetBrains\PhpStorm\Language;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ShortLyController extends Controller
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }
    public function index(Request $request, $slug)
    {
        $shortlink = ShortLink::where('code_share', $slug)->first();
        $data['view_link_shortly'] = $shortlink->view_link_shortly + 1;
        $links = ShortLink::where('code_share', $slug)->pluck('url_ads')->first();
        $shortlink->fill($data)->save();
        return redirect($links);
    }
    public function index_count()
    {
        $this->session->put('viewed_posts', 'count_view');
        return view('pages.home.count');;
    }
    public function view_count(Request $request)
    {
        $val = session('key', 'count_view');
        $shortlink = ShortLink::where('code_share', $request->asmid)->first();
        if ($shortlink && $val) {
            $data['view_link_share'] = $shortlink->view_link_share + 1;
            $shortlink->fill($data)->save();
        } else {
            return 'Wellcome to Unispice';
        }
    }
}
