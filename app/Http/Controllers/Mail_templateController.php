<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Mail_template;
use Illuminate\Support\Facades\Auth;
use Spatie\Browsershot\Browsershot;

class Mail_templateController extends Controller
{
    function create()
    {

    }

    function store(Request $request)
    {
        $template = new Mail_template;
        $request->validate([
            "title" => "required|unique:mail_templates|min:3",
            "content" => "required|min:12"
        ]);

        $template->title = $request->title;
        $template->content = $request->content;
        $template->creator = Auth::id();
        $template->status = $request->action;
        $template->save();

        return back()->with('status', $request->action);
    }

    function show($id)
    {
        $template = Mail_template::find($id);

        return response(htmlspecialchars_decode($template->content), 200)->header('Content-Type', 'text/html');
    }

    function download($id)
    {
        $template = Mail_template::find($id);
        $content = $template->content;
        $title = $template->title;
        $dompdf = new Dompdf();
        $dompdf->loadHtml(htmlspecialchars_decode($content));
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
        $dompdf->render();

// Download the generated PDF
        $dompdf->stream($title . ".pdf");
        $dompdf->render();
    }
}
