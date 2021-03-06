<?php

namespace App\Notifications;

use App\Models\Order;
use Benwilkins\FCM\FcmMessage;
use FontLib\Table\Type\name;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrder extends Notification
{
    use Queueable;
    /**
     * @var Order
     */
    private $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        //
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'fcm'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('¡Gracias por usar nuestra aplicación!');
    }

    public function toFcm($notifiable)
    {
        $message = new FcmMessage();
        $notification = [
            'title' => "Nuevo Pedido #" . $this->order->id . " para " . $this->order->productOrders[0]->product->market->name,
            'body' => "Nuevo pedido del usuario ".$this->order->user->name,
            'current_order_id' => $this->order->id,
            'icon' => $this->order->productOrders[0]->product->market->getFirstMediaUrl('image', 'thumb'),
            'click_action' => "FLUTTER_NOTIFICATION_CLICK",
            'id' => 'Pedidos',
            'sound' => 'custom_sound',
            'status' => 'done',
        ];
        $message->content($notification)->data($notification)->priority(FcmMessage::PRIORITY_HIGH);

        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'current_order_id' => $this->order->id,

            'order_id' => $this->order['id'],
        ];
    }
}
