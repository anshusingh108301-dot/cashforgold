<?php include 'header.php'; ?>

<!-- ✅ Hero Section -->
<section id="home" class="hero text-center py-5" style="background-color:#000; color:#FFD700;">
  <div class="container">
    <h1 class="fw-bold mb-3">Turn Your Gold into Instant Cash</h1>
    <p class="text-warning mb-4 fs-5">Quick and secure gold loans with transparent valuation and fast approvals.</p>
    <a href="#loan" class="btn btn-apply btn-lg" style="background-color:#9A7F41; color:#DFDF;">
      <i class="bi bi-credit-card-2-front"></i> Apply for Gold Loan
    </a>
  </div>
</section>

<!-- ✅ About Section -->
<section id="about" class="py-5" style="background-color:#000; color:#FFD700;">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6">
        <img src="cash-1.jpg" alt="About Gold Loan" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">About Cash for Gold</h2>
        <p class="mb-3" style="color:#fff">

          Cash for Gold offers quick and hassle-free gold loan services.  
          Our goal is to help customers get instant liquidity against their gold ornaments with complete transparency and trust.
        </p>
        <ul class="list-unstyled" style="color:#fff">
          <li><i class="bi bi-check-circle"></i> Fast approval and same-day disbursement</li>
          <li><i class="bi bi-check-circle"></i> Secure storage and transparent valuation</li>
          <li><i class="bi bi-check-circle"></i> Flexible repayment options</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Gold Rates -->
<section id="rates" class="py-5 text-center" style="background-color:#fff; color:#FFD700;">
  <div class="container">
    <h2 class="fw-bold mb-4">Today’s Gold Rate (<?= date('d M Y'); ?>)</h2>
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 mb-3">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <h5>22K Gold</h5>
          <p class="fs-4 text-warning mb-0">₹5,815 <small>/ gram</small></p>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <h5>24K Gold</h5>
          <p class="fs-4 text-warning mb-0">₹6,353 <small>/ gram</small></p>
        </div>
      </div>
    </div>
    <small class="text-warning">*Rates are indicative and may vary by branch.</small>
  </div>
</section>

<!-- ✅ Services Section -->
<section id="services" class="py-5" style="background-color:#fff; color:#FFD700;">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Our Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <i class="bi bi-bank fs-1 text-warning"></i>
          <h5 class="mt-3">Gold Loans</h5>
          <p class="text-warning small">
            Get instant loans against your gold with flexible repayment and low interest.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <i class="bi bi-cash-stack fs-1 text-warning"></i>
          <h5 class="mt-3">Sell Your Gold</h5>
          <p class="text-warning small">
            Get the best price for your gold jewelry with safe and transparent deals.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <i class="bi bi-shield-lock fs-1 text-warning"></i>
          <h5 class="mt-3">Safe Storage</h5>
          <p class="text-warning small">
            Your pledged gold is stored securely with full insurance and transparency.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Loan Calculator -->
<section id="loan" class="py-5" style="background-color:#000; color:#FFD700;">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Gold Loan Calculator</h2>
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="p-4" style="background-color:#111; border-radius:8px;">
          <form onsubmit="return false;">
            <div class="mb-3">
              <label class="form-label">Gold Weight (grams)</label>
              <input type="number" id="goldWeight" class="form-control" value="10" min="1" style="background-color:#000; color:#FFD700; border:1px solid #FFD700;">
            </div>
            <div class="mb-3">
              <label class="form-label">Gold Purity</label>
              <select id="goldPurity" class="form-select" style="background-color:#000; color:#FFD700; border:1px solid #FFD700;">
                <option value="22">22K</option>
                <option value="24">24K</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Rate (₹ per gram)</label>
              <input type="number" id="ratePerGram" class="form-control" value="5815" style="background-color:#000; color:#FFD700; border:1px solid #FFD700;">
            </div>
            <div class="mb-3">
              <label class="form-label">Loan Tenure (Months)</label>
              <select id="loanTenure" class="form-select" style="background-color:#000; color:#FFD700; border:1px solid #FFD700;">
                <option value="3">3 Months</option>
                <option value="6">6 Months</option>
                <option value="9">9 Months</option>
                <option value="12">12 Months</option>
              </select>
            </div>
            <button class="btn w-100" style="background-color:#9A7F41; color:#000;" onclick="calculateLoan()">Calculate</button>
          </form>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="p-4 text-center" style="background-color:#111; border-radius:8px;">
          <h5 class="fw-bold mb-3">Loan Estimate</h5>
          <p><strong>Eligible Loan Amount:</strong> <span id="eligibleLoan">—</span></p>
          <p><strong>Approx. EMI:</strong> <span id="emiVal">—</span></p>
          <p><strong>Interest Rate:</strong> <span id="intRate">—</span></p>
          <a href="#contact" class="btn w-100 mt-3" style="background-color:#9A7F41; color:#000;">Proceed to Apply</a>
          <small class="d-block mt-2" style="color:#ccc;">*Subject to valuation & KYC verification.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Contact Section -->
<section id="contact" class="py-5" style="background-color:#fff; color:#FFD700;">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Contact Us</h2>
    <p class="mb-4" style="color:#000;">Have questions about our gold loan services? Get in touch today.</p>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="p-4 h-100" style="background-color:#111; border-radius:8px;">
          <i class="bi bi-telephone fs-1 text-warning"></i>
          <p class="mt-3 mb-0"><?= $contactPhone ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 h-100" style="background-color:#111; border-radius:8px;">
          <i class="bi bi-envelope fs-1 text-warning"></i>
          <p class="mt-3 mb-0"><?= $contactEmail ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- ✅ Script for Calculator -->
<script>
function calculateLoan() {
  const weight = parseFloat(document.getElementById('goldWeight').value) || 0;
  const rate = parseFloat(document.getElementById('ratePerGram').value) || 0;
  const tenure = parseInt(document.getElementById('loanTenure').value) || 3;

  const LTV = 0.8; // 80% of gold value
  const interestRate = 8; // annual %

  const eligibleLoan = weight * rate * LTV;
  const monthlyRate = interestRate / 8 / 100;
  const emi = (eligibleLoan * monthlyRate * Math.pow(1 + monthlyRate, tenure)) / (Math.pow(1 + monthlyRate, tenure) - 1);

  document.getElementById('eligibleLoan').innerText = '₹ ' + eligibleLoan.toFixed(0);
  document.getElementById('emiVal').innerText = '₹ ' + emi.toFixed(0) + ' / month';
  document.getElementById('intRate').innerText = interestRate + '% p.a.';
}
</script>

<style>
  body { background-color:#000; color:#FFD700; }
  .btn-apply:hover { opacity:0.9; }
  input, select { color:#FFD700; }
</style>

