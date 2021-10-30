<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Session;
use Locale;
use App\Models\Contact;
use App\Models\Configuration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $contact_vi = 'Liên hệ';
        $contact_en = 'Contact';
        \SEOMeta::setTitle(getDataByLang($lang_code,$contact_vi,$contact_en));
        \SEOMeta::setDescription(getDataByLang($lang_code,$contact_vi,$contact_en));
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription(getDataByLang($lang_code,$contact_vi,$contact_en));
        \OpenGraph::setTitle(getDataByLang($lang_code,$contact_vi,$contact_en));
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        $config = Configuration::get();
       
        $viewData = [
            'config' => $config,
            'lang_code' => $lang_code,
        ];
        return view('pages.contact.index', $viewData);
    }
 
    public function submitContact(AdminContactRequest $request)
    { 
        $data = $request->except(['save', '_token']);
        $data['created_at'] = Carbon::now();
        $contactID = Contact::insertGetId($data);
        if ($contactID) {
            $this->showMessagesSuccess();
            return redirect()->route('get.contact');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
}
