require('./bootstrap');

Echo.private('chat')
  .listen('Message', (e) => {
    this.messages.push({
      message: e.message.message,
    });
  });