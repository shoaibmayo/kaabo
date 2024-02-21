<h5 class="text-primary">My Account</h5>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="{{ url('userdashboard') }}">Dashboard</a>
          </li>
          <li>
              <a href="{{ url('user/purchaseptc/ads') }}">Purchase Package</a>
          </li>
          <li>
              <a href="#">Special Weekend Line</a>
          </li>
          <li>
            <a href="#">Purchase Cycler Spots</a>
          </li>
        </ul>

        <h5 class="text-primary">Genealogy History</h5>
        <ul class="list-unstyled components mb-5">
             <li>
            <a href="{{ url('/user/directrefferals') }}">My Direct Refferals</a>
            </li>
            <li>
                <a href="{{ url('/user/binarypairing') }}">My Binary Pairing</a>
            </li>
            <li>
                <a href="{{ url('/user/binarypairing') }}">My Follow Me Phases</a>
            </li>
            <li>
              <a href="{{ url('/user/myaccount-promote-history') }}">My Account Promote History</a>
            </li>
            <li>
            <a href="#">My Single Line Cycler</a>
            </li>
        </ul>


        <h5 class="text-primary">Transactions & Statistics</h5>
        <ul class="list-unstyled components mb-5">
            <li>
                <a href="{{ url('/user/direct-bonus') }}">My Direct Bonus</a>
            </li>
            <li>
                <a href="{{ url('/user/direct-bonus') }}">My Cycler Bonus</a>
            </li>
            <li>
                <a href="{{ url('/user/pairing-bonus') }}">My Pairing Bonus</a>
            </li>
            <li>
              <a href="{{ url('/user/pairing-bonus') }}">My Phases Bonus</a>
            </li>
            <li>
            <a href="{{ url('/user/PTC-Stats') }}">My PTC Stats</a>
            </li>
            <li>
              <a href="{{ url('/user/E-Wallet-History') }}">My E-Wallet History</a>
            </li>
            <li>
              <a href="{{ url('/user/add-fund/Ewallet-request') }}">Add Fund To E-Wallet</a>
            </li>
            <li>
              <a href="{{ url('/user/transfer/Ewallet-request') }}">Transfer E-Wallet Balance</a>
            </li>
            <li>
              <a href="{{ url('/user/withdraw/cash-request') }}">Withdraw Your Cash Balance</a>
            </li>
        </ul>

        <h5 class="text-primary">Paid To Click Advertisements</h5>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="{{ url('/user/purchaseptc/ads') }}">Purchase PTC Ads</a>
          </li>
          <li>
              <a href="{{ url('/user/viewptc/ads') }}">View PTC Ads</a>
          </li>
          <li>
              <a href="{{ url('/user/purchaseptc/ads') }}">Purchase Ads Package</a>
          </li>
          
        </ul>

        <h5 class="text-primary">Advertisement Manager</h5>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="{{ url('/weipromotional/material') }}">WEI Promotional Material</a>
          </li>
          <li>
              <a href="{{ url('/weibanner/ads') }}">Manage Banner Ads</a>
          </li>
          <li>
              <a href="{{ url('/wei/text/ads') }}">Manage Text Ads</a>
          </li>
          
        </ul>

        <h5 class="text-primary">Personal Details</h5>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="{{ url('/user/edit/profile') }}">Edit Profile</a>
          </li>
          <li>
              <a href="{{ url('/user/writetestimonal') }}">Write Testimonials</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <span>
                  <button class="text-primary" style="background:none; border:none;">Logout</button>
              </span>
          </form>
          </li>
          
        </ul>