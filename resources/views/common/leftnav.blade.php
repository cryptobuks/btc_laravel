<section class="container blog-page">
<div class="row">
<div class="sidebar col-xs-12 col-md-4">
  <div class="widget">
    <h3 class="widget-title" style="color:white;">User Menu</h3>
    <div id="sidemenu">
      <ul style="display:block;">
        <li><span><span>My Account</span></span>
          <ul style="display:block;">
            <li><a href="{{ route('user.accountoverview') }}">Account Overview</a></li>
            <li><a href="{{ route('user.generalsettings') }}">General
              Settings</a></li>
            <li><a href="{{ route('user.cashoutsettings') }}">Cashout
              Settings</a></li>
          </ul>
        </li>
        <li><span><span>My wallet</span></span>
          <ul>
            <li><a href="{{ route('user.walletbalance') }}">Wallet Balance</a></li>
            <li><a href="{{ route('user.depositfunds') }}">Deposit Funds</a></li>
            <li><a href="{{ route('user.withdrawfunds') }}">Withdraw
              Funds</a></li>
          </ul>
        </li>
        <li><span><span>Crypto Matrix </span></span>
          <ul>
            <li><a href="{{ route('user.buymatrixpositions') }}">Buy
              Matrix Positions</a></li>
            <li><a href="{{ route('user.viewmatrix') }}"> View Matrix Positions</a></li>
            
          </ul>
        </li>
        <li><span><span>Finance</span></span>
          <ul>
            <li><a href="{{ route('user.transactions') }}">Transactions</a></li>
            <li><a href="{{ route('user.commissions') }}">Commissions</a></li>
            <li><a href="{{ route('user.deposits') }}">Deposits</a></li>
            <li><a href="{{ route('user.withdrawals') }}">Withdrawals</a></li>
          </ul>
        </li>
        <li><span><span>Referrals Program</span></span>
          <ul>
            <li><a href="{{ route('user.referrals') }}">Referrals</a></li>
            <li><a href="{{ route('user.promotiontools') }}">Promotion tools</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
