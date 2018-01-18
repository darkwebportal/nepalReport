# NepalReports - A Crime Reporting Portal

This is a web portal which works to collaborate the goverment authorities with citizens to monitor and exchange timely crime reports witnessed in realtime allowing for action in no time with anonyomous reporting for user and dashboard for admin side. 

[![NepalReports demo](https://i.imgur.com/ZQ7umP5.png)](http://nepalreports.cf/)

## Working Scenario

***User:***
- Easy account creation using the form or using Facebook login
- An encrypted form to send back the server in every field with the background of certain Law the person can take the basis
- Account details created will not be received by the admin, hence allowing anonymous Form Fillup
- Only after verification and aggrement, the account details will be shown to the concerned authorities
- Filtering of ***#tonepalreports*** tweets filtered to directly reached to admins allowing hassle free reporting

[![User demo](https://i.imgur.com/S1BuyiX.png)](http://nepalreports.cf/)

***Admin:***
- An additional <a href="http://nepalreports.cf/adminlogin " target="_blank">Admin-Login</a> to dashboard to visualize the reports received
- A timeline layout showing feeds according to recent report in priority and total fields under which reports have been received
- Option to act on it with interation with user who filed the report to further proceed the work

[![User demo](https://i.imgur.com/aq40jjN.png)](http://nepalreports.cf/adminlogin)

## Usage

- Goto http://nepalreports.cf

- Else setup <a href="https://httpd.apache.org/" target="_blank">Apache Web Service</a> and <a href="https://mariadb.org/" target="_blank">MariaDB</a> and open from localhost:

```
git clone https://github.com/psuzn/nepalReport
cd nepalReport
```

## Technologies

- CodeIgniter for PHP
- MySql and PhpMyAdmin for Database
- Google Material Design Pattern HTML

## Todos

- [ ] Creating a better UI with navbar in Login and Register pages
- [ ] Addition more visualization pattern like graphs and Bars for realtime analysis
- [ ] Using the ***#tonepalreports*** hashtag for sentiment analysis 

## Contributing

1. Fork it (https://github.com/psuzn/nepalReport/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
