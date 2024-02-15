<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class newsletter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email;
    public $template;
    public $media;
    public function __construct($email, $template, $media)
    {
        $this->email = $email;
        $this->template = $template;
        $this->media = $media;
    }

    /**
     * Get the message envelope.
     */
  /*  public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Newsletter',
        );
    }*/

    /**
     * Get the message content definition.
     */
   /* public function content(): Content
    {
        return new Content(
            view: 'mail.template',
            with: ["template" => $this->template],
            attach:
        );
    }*/



  /*  public function attachments(): array
    {
        if($this->medias) {
            $attachments = [];
            foreach ($this->medias as $media) {
                $media = Media::find($media);
                $attachments[] = Attachment::fromStorage($media->file_name);
            }
            return $attachments;
        }
        return [];
    }*/

    public function build()
    {
        $media = Media::find($this->media)->first();
        return $this
            ->from('benfianass@gmail.com', 'Benfill')
            ->html(htmlspecialchars_decode($this->template->content))
            ->attach($media);
    }
}
