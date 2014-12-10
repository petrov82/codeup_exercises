#!/usr/bin/perl
use strict;
use warnings;

# first, create your message
use Email::MIME;
my $message = Email::MIME->create(
  header_str => [
    From    => 'petrov82@aim.com',
    To      => 'rhodes.pj@gmail.com',
    Subject => 'Get Outside More',
  ],
  attributes => {
    encoding => 'quoted-printable',
    charset  => 'ISO-8859-1',
  },
  body_str => "Hello, Peter!\nI know that you are super busy, but I just wanted to encourage you to get outside and enjoy the day.\nHope all is well!\nRegards,\nPeter R.\n",
);

# send the message
use Email::Sender::Simple qw(sendmail);
sendmail($message);
