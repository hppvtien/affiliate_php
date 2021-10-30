<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\UserCampaign;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaignController extends AdminController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $campaign = UserCampaign::orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'campaign' => $campaign
        ];
        return view('admin::pages.campaign.index', $viewData);
    }
    public function create()
    {
        return view('admin::pages.campaign.create');
    }
    public function store(Request $request)
    {
        $data = $request->except(['save', '_token']);

        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('admins');
        $data['user_id'] = get_data_user('admins');
        $campaignID = UserCampaign::insertGetId($data);

        if ($campaignID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.campaign.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
    public function edit($id)
    {
        $campaign = UserCampaign::findOrFail($id);
        return view('admin::pages.campaign.update', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = UserCampaign::findOrFail($id);
        $data = $request->except(['save', '_token']);
        $data['updated_at'] = Carbon::now();
        $data['updated_by'] = get_data_user('admins');
        $campaign->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.campaign.index');
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $campaign = UserCampaign::findOrFail($id);
            $campaign->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
