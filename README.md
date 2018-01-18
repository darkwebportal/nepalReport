# NepalReports

This is a web portal which works to collaborate the goverment authorities to and from citizens to monitor and exchange timely reports witnessed in realtime allowing for action in no time.

##Working Scenario:

***User:***
- An encrypted form to send back the server in every field with the background of certain Law the person can take the basis
- Account details created will not be received by the admin, hence allowing anonymous Form Fillup
- Only after verification and aggrement, the account details will be shown to the concerned authorities
- Filtering of #tonepalreports tweets filtered to directly reached to admins allowing hassle free reporting

***Admin:***
- An additional http://nepalreports.cf/adminlogin dashboard to visualize the reports received
- A timeline layout showing feeds according to recent report in priority
- Option to act on it with interation with user who filed the report to further proceed the work

## Installation

Add this line to your application's Gemfile:

```ruby
gem 'chicago_crimes_one_year'
```

And then execute:

    $ bundle

Or install it yourself as:

    $ gem install chicago_crimes_one_year

## Usage

To retrieve all the Chicago employees, use this command:

```ruby
ChicagoCrimesOneYear::Crime.all
```

To retrieve employees based on a specific search term:

```ruby
ChicagoCrimesOneYear::Crime.find(YOUR-SEARCH-TERM-HERE)
example:
ChicagoCrimesOneYear::Crime.find(Western)
example:
ChicagoCrimesOneYear::Crime.find(Robbery)
```

## Contributing

1. Fork it ( https://github.com/[my-github-username]/chicago_crimes_one_year/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
