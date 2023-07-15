<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LocationSensor;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationCenterController extends Controller
{
    public function index()
    {
        return view('admin.notificationCenter.index', [
            'locations_publishs' => Notification::where('log', 'Publish')->get(),
            'locations_logs' => Notification::where('log', 'Publish_log')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.notificationCenter.create', [
            'locations' => LocationSensor::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => 'required',
            "location" => 'required',
            "status" => 'required',
            "description" => 'required',
        ]);

        $notification = new Notification();
        $notification->title = $request->title;
        $notification->location = $request->location;
        $notification->status = $request->status;
        $notification->description = $request->description;
        $notification->log = "Publish";
        $notification->save();

        return redirect('admin/notification-center')->with('success', 'success publish notification');
    }

    public function update(Notification $notification)
    {
        $notification->log = "Publish_log";
        $notification->save();
        return back()->with('success', 'success Un Published notification');
    }

    public function destroy(Notification $notification_log){
        $notification_log->delete();
        return back()->with('danger', 'success delete notification');
    }
}
