<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shipment Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdn.sheetjs.com/xlsx-latest/package/xlsx.full.min.js"></script>
  <style>
    :root {
      --bg: #f4f6ff;
      --text: #333;
      --card-bg: white;
    }
    body.dark-mode {
      --bg: #1e1e2f;
      --text: #f1f1f1;
      --card-bg: #2c2c3e;
    }
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }
    body {
      background-color: var(--bg);
      color: var(--text);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .navbar {
      background-color: #1e293b;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar h1 {
      font-size: 20px;
    }
    .navbar nav a {
      margin-left: 20px;
      color: white;
      text-decoration: none;
    }
    .navbar nav a:hover {
      text-decoration: underline;
    }
    .dashboard {
      padding: 20px;
    }
    .summary-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
      margin-bottom: 30px;
    }
    .card {
      flex: 1 1 200px;
      background: var(--card-bg);
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      padding: 20px;
      text-align: center;
    }
    .card h2 {
      color: #007AFF;
      margin-bottom: 10px;
    }
    .section {
      background: var(--card-bg);
      border-radius: 10px;
      margin-bottom: 30px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    .section h3 {
      margin-bottom: 15px;
    }
    .filters {
      display: none;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 15px;
    }
    .filters.show {
      display: flex;
    }
    select, input[type="date"], input[type="number"] {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    #noResults {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      display: none;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #eee;
      font-size: 14px;
    }
    .status {
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 12px;
    }
    .paid { background-color: #d4f4dd; color: green; }
    .pending { background-color: #fff4cc; color: #c08400; }
    .cancelled { background-color: #ffd6d6; color: red; }
    button {
      background-color: #007AFF;
      color: white;
      border: none;
      padding: 6px 14px;
      border-radius: 5px;
      cursor: pointer;
    }
    .toolbar {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 10px;
    }
    .chart-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    canvas {
      max-width: 300px;
    }
    @media (max-width: 768px) {
      .summary-cards {
        flex-direction: column;
      }
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .navbar nav {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="navbar">
    <h1>Shipment Dashboard</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">Orders</a>
      <a href="#">Shipments</a>
      <a href="#">Settings</a>
      <button onclick="toggleDarkMode()">🌗 Mode</button>
    </nav>
  </div>
  <div class="dashboard">
    <div class="summary-cards">
      <div class="card"><h2>21K</h2><p>NDR Shipment</p></div>
      <div class="card"><h2>250M</h2><p>Pick Up</p></div>
      <div class="card"><h2>250M</h2><p>Intransit</p></div>
      <div class="card"><h2>250M</h2><p>Delivered</p></div>
    </div>

    <div class="section">
      <h3>Previous Order Transaction</h3>
      <div class="toolbar">
        <button onclick="toggleFilters()">🔽 Filters</button>
        <button onclick="exportToPDF()">📄 PDF</button>
        <button onclick="exportToExcel()">📊 Excel</button>
      </div>
      <div class="filters" id="filtersPanel">
        <select id="statusFilter">
          <option value="all">Status Filter</option>
          <option value="paid">Paid</option>
          <option value="pending">Pending</option>
          <option value="cancelled">Cancelled</option>
        </select>
        <input type="date" id="fromDate">
        <input type="date" id="toDate">
        <input type="number" id="minAmount" placeholder="Min Amount">
        <input type="number" id="maxAmount" placeholder="Max Amount">
      </div>
      <table id="orderTable">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer</th>
            <th>Shipment Company</th>
            <th>State</th>
            <th>Tracking ID</th>
            <th>Payment Mode</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr data-status="paid" data-date="2024-02-10" data-amount="400">
            <td>#ORD1234</td><td>Feb 10</td><td>John Doe</td><td>Delhivery</td><td>Maharashtra</td><td>TRK123456</td><td>Prepaid</td>
            <td><span class="status paid">Paid</span></td><td>USD 400</td><td><button>Pay</button></td>
          </tr>
          <tr data-status="pending" data-date="2024-03-12" data-amount="300">
            <td>#ORD5678</td><td>Mar 12</td><td>Jane Smith</td><td>Blue Dart</td><td>Delhi</td><td>TRK654321</td><td>COD</td>
            <td><span class="status pending">Pending</span></td><td>USD 300</td><td><button>Pay</button></td>
          </tr>
          <tr data-status="cancelled" data-date="2024-03-15" data-amount="200">
            <td>#ORD9012</td><td>Mar 15</td><td>Mike Ray</td><td>XpressBees</td><td>Gujarat</td><td>TRK998877</td><td>Prepaid</td>
            <td><span class="status cancelled">Cancelled</span></td><td>USD 200</td><td><button>Pay</button></td>
          </tr>
        </tbody>
      </table>
      <p id="noResults">No matching records found.</p>
    </div>

    <div class="section chart-container">
      <canvas id="cashChart"></canvas>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const toggleDarkMode = () => document.body.classList.toggle('dark-mode');
    const toggleFilters = () => document.getElementById('filtersPanel').classList.toggle('show');

    const statusFilter = document.getElementById('statusFilter');
    const fromDate = document.getElementById('fromDate');
    const toDate = document.getElementById('toDate');
    const minAmount = document.getElementById('minAmount');
    const maxAmount = document.getElementById('maxAmount');
    const noResults = document.getElementById('noResults');
    const rows = document.querySelectorAll('#orderTable tbody tr');

    function filterTable() {
      const status = statusFilter.value;
      const from = new Date(fromDate.value);
      const to = new Date(toDate.value);
      const min = parseFloat(minAmount.value);
      const max = parseFloat(maxAmount.value);

      let visibleCount = 0;
      rows.forEach(row => {
        const rowStatus = row.dataset.status;
        const rowDate = new Date(row.dataset.date);
        const rowAmount = parseFloat(row.dataset.amount);

        let statusMatch = status === 'all' || status === rowStatus;
        let dateMatch = (!fromDate.value || rowDate >= from) && (!toDate.value || rowDate <= to);
        let amountMatch = (!minAmount.value || rowAmount >= min) && (!maxAmount.value || rowAmount <= max);

        if (statusMatch && dateMatch && amountMatch) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    statusFilter.addEventListener('change', filterTable);
    fromDate.addEventListener('change', filterTable);
    toDate.addEventListener('change', filterTable);
    minAmount.addEventListener('input', filterTable);
    maxAmount.addEventListener('input', filterTable);

    function exportToPDF() {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();
      let content = 'Order ID | Date | Customer | Company | State | Tracking | Mode | Status | Amount\n';
      rows.forEach(row => {
        if (row.style.display !== 'none') {
          const cells = row.querySelectorAll('td');
          let data = Array.from(cells).slice(0, 9).map(td => td.innerText).join(' | ');
          content += data + '\n';
        }
      });
      doc.text(content, 10, 10);
      doc.save('orders.pdf');
    }

    function exportToExcel() {
      const wb = XLSX.utils.book_new();
      const ws_data = [[
        'Order ID', 'Date', 'Customer', 'Shipment Company', 'State', 'Tracking ID', 'Payment Mode', 'Status', 'Amount'
      ]];
      rows.forEach(row => {
        if (row.style.display !== 'none') {
          const cells = row.querySelectorAll('td');
          ws_data.push(Array.from(cells).slice(0, 9).map(td => td.innerText));
        }
      });
      const ws = XLSX.utils.aoa_to_sheet(ws_data);
      XLSX.utils.book_append_sheet(wb, ws, 'Orders');
      XLSX.writeFile(wb, 'orders.xlsx');
    }

    new Chart(document.getElementById('cashChart'), {
      type: 'doughnut',
      data: {
        labels: ['Cash on Delivery', 'Prepaid'],
        datasets: [{
          data: [25000, 50000],
          backgroundColor: ['#ff6b6b', '#007aff']
        }]
      },
      options: { plugins: { legend: { position: 'bottom' } } }
    });
  </script>
</body>
</html>
