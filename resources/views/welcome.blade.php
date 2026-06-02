<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalentPulse | Premium Employee Management</title>
    
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons and Tailwind Utilities for Layout -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Premium Stylesheet -->
    <style>
        :root {
            --bg-primary: #0b0f19;
            --bg-secondary: rgba(17, 24, 39, 0.7);
            --card-border: rgba(255, 255, 255, 0.06);
            --accent-green: #10b981;
            --accent-green-glow: rgba(16, 185, 129, 0.15);
            --accent-blue: #3b82f6;
            --text-main: #f3f4f6;
            --text-muted: #9ca3af;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-primary);
            color: var(--text-main);
            min-height: 100vh;
            overflow-x: hidden;
            background-image: 
                radial-gradient(at 0% 0%, rgba(59, 130, 246, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(16, 185, 129, 0.08) 0px, transparent 50%);
        }

        /* Layout Structure */
        .app-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Design */
        .sidebar {
            width: 280px;
            background-color: rgba(17, 24, 39, 0.95);
            border-right: 1px solid var(--card-border);
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: fixed;
            height: 100vh;
            z-index: 10;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 3rem;
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--accent-green), var(--accent-blue));
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: white;
            box-shadow: 0 4px 20px rgba(16, 185, 129, 0.3);
        }

        .logo-text {
            font-family: 'Outfit', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #ffffff, #9ca3af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            flex-grow: 1;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 12px;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .nav-item:hover, .nav-item.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.04);
        }

        .nav-item.active {
            border-left: 3px solid var(--accent-green);
            background: linear-gradient(to right, rgba(16, 185, 129, 0.05), transparent);
        }

        .nav-item i {
            font-size: 1.2rem;
            width: 24px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--card-border);
        }

        .user-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-blue), #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
        }

        .user-info h4 {
            font-size: 0.9rem;
            font-weight: 600;
            color: white;
        }

        .user-info p {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* Main Content View */
        .main-content {
            margin-left: 280px;
            flex-grow: 1;
            padding: 2.5rem 3rem;
            max-width: 1600px;
        }

        /* Header Area */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .header h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 0.25rem;
        }

        .header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-primary {
            background-color: var(--accent-green);
            color: white;
            box-shadow: 0 4px 20px var(--accent-green-glow);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(16, 185, 129, 0.3);
        }

        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
            border: 1px solid var(--card-border);
        }

        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.08);
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }

        .stat-card {
            background-color: var(--bg-secondary);
            backdrop-filter: blur(12px);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 1.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: rgba(255, 255, 255, 0.12);
        }

        .stat-info p {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--text-muted);
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .stat-info h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2rem;
            font-weight: 700;
        }

        .stat-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-icon.green {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--accent-green);
        }

        .stat-icon.blue {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--accent-blue);
        }

        .stat-icon.purple {
            background-color: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
        }

        /* Controls: Filter & Search */
        .controls-card {
            background-color: var(--bg-secondary);
            backdrop-filter: blur(12px);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            flex-grow: 1;
            max-width: 450px;
        }

        .search-box i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .input-field {
            width: 100%;
            background-color: rgba(15, 23, 42, 0.6);
            border: 1px solid var(--card-border);
            border-radius: 12px;
            padding: 0.75rem 1rem 0.75rem 2.7rem;
            color: white;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .input-field:focus {
            outline: none;
            border-color: var(--accent-green);
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.1);
        }

        .filter-select {
            background-color: rgba(15, 23, 42, 0.6);
            border: 1px solid var(--card-border);
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            color: white;
            font-size: 0.9rem;
            outline: none;
            cursor: pointer;
            min-width: 200px;
        }

        .filter-select option {
            background-color: #111827;
            color: white;
        }

        /* Table Card Container */
        .table-card {
            background-color: var(--bg-secondary);
            backdrop-filter: blur(12px);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .employee-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .employee-table th {
            background-color: rgba(15, 23, 42, 0.3);
            padding: 1.25rem 1.5rem;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.75px;
            color: var(--text-muted);
            border-bottom: 1px solid var(--card-border);
        }

        .employee-table td {
            padding: 1.25rem 1.5rem;
            font-size: 0.9rem;
            border-bottom: 1px solid var(--card-border);
            vertical-align: middle;
        }

        .employee-table tbody tr {
            transition: background-color 0.2s;
        }

        .employee-table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.02);
        }

        .emp-name-cell {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .emp-initials {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--accent-green), var(--accent-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            color: white;
        }

        .emp-primary {
            font-weight: 600;
            color: white;
        }

        .emp-secondary {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .badge-position {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--accent-blue);
            padding: 0.35rem 0.75rem;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .btn-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
        }

        .btn-icon-edit {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--accent-blue);
        }

        .btn-icon-edit:hover {
            background-color: var(--accent-blue);
            color: white;
        }

        .btn-icon-delete {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .btn-icon-delete:hover {
            background-color: #ef4444;
            color: white;
        }

        /* Empty State */
        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--accent-green), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Modal Overlay & Card */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .modal-card {
            background-color: #111827;
            border: 1px solid var(--card-border);
            border-radius: 24px;
            width: 100%;
            max-width: 600px;
            padding: 2.25rem;
            transform: scale(0.9);
            transition: transform 0.3s;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .modal-overlay.active .modal-card {
            transform: scale(1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.75rem;
        }

        .modal-header h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .close-btn {
            background: none;
            border: none;
            color: var(--text-muted);
            font-size: 1.25rem;
            cursor: pointer;
            transition: color 0.2s;
        }

        .close-btn:hover {
            color: white;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
            margin-bottom: 1.75rem;
        }

        .form-full {
            grid-column: span 2;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-muted);
        }

        .form-control {
            background-color: rgba(15, 23, 42, 0.6);
            border: 1px solid var(--card-border);
            border-radius: 10px;
            padding: 0.75rem 1rem;
            color: white;
            font-size: 0.9rem;
            outline: none;
            width: 100%;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: var(--accent-green);
            box-shadow: 0 0 8px rgba(16, 185, 129, 0.1);
        }

        .text-error {
            color: #ef4444;
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        /* Toast Notifications */
        .toast-container {
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .toast {
            background-color: #1f2937;
            border-left: 4px solid var(--accent-green);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transform: translateX(120%);
            transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.error {
            border-left-color: #ef4444;
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .sidebar {
                width: 80px;
                padding: 2rem 0.5rem;
                align-items: center;
            }
            .logo-text, .user-info, .sidebar-footer {
                display: none;
            }
            .logo-area {
                justify-content: center;
                margin-bottom: 2rem;
            }
            .nav-item {
                justify-content: center;
                padding: 1rem 0;
            }
            .nav-item span {
                display: none;
            }
            .main-content {
                margin-left: 80px;
                padding: 2rem 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-full {
                grid-column: span 1;
            }
            .controls-card {
                flex-direction: column;
                align-items: stretch;
            }
            .search-box {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

@verbatim
    <div id="app" class="app-container">
        
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div>
                <div class="logo-area">
                    <div class="logo-icon">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <span class="logo-text">TalentPulse</span>
                </div>

                <nav class="nav-menu">
                    <a class="nav-item active">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                    <a class="nav-item" @click="showToast('Cloud connection is active!', 'success')">
                        <i class="fa-solid fa-server"></i>
                        <span>Server Status</span>
                    </a>
                </nav>
            </div>

            <div>
                <div class="user-profile">
                    <div class="user-avatar">AD</div>
                    <div class="user-info">
                        <h4>Admin User</h4>
                        <p>system@talentpulse.com</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Dashboard View -->
        <main class="main-content">
            
            <!-- Dashboard Header -->
            <header class="header">
                <div>
                    <h1>Employee Directory</h1>
                    <p>Manage and monitor real-time company statistics and staff listings.</p>
                </div>
                <button class="btn btn-primary" @click="openModal('add')">
                    <i class="fa-solid fa-plus"></i> Add Employee
                </button>
            </header>

            <!-- Metrics / Stats Grid -->
            <section class="stats-grid">
                <div class="stat-card">
                    <div class="stat-info">
                        <p>Total Staff</p>
                        <h2>{{ totalStaff }}</h2>
                    </div>
                    <div class="stat-icon green">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <p>Average Salary</p>
                        <h2>${{ averageSalary }}</h2>
                    </div>
                    <div class="stat-icon blue">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <p>Recent Joinees</p>
                        <h2>{{ recentJoineesCount }}</h2>
                    </div>
                    <div class="stat-icon purple">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                </div>
            </section>

            <!-- Real-time Filter & Search Controls -->
            <section class="controls-card">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input 
                        type="text" 
                        class="input-field" 
                        placeholder="Search by name, email, or position..."
                        v-model="searchQuery"
                    >
                </div>
                <div>
                    <select class="filter-select" v-model="selectedPosition">
                        <option value="">All Positions</option>
                        <option v-for="pos in uniquePositions" :value="pos" :key="pos">{{ pos }}</option>
                    </select>
                </div>
            </section>

            <!-- Employee Table Listing -->
            <section class="table-card">
                <div class="table-responsive">
                    <table class="employee-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Date of Joining</th>
                                <th style="text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody v-if="filteredEmployees.length > 0">
                            <tr v-for="employee in filteredEmployees" :key="employee.id">
                                <td>
                                    <div class="emp-name-cell">
                                        <div class="emp-initials">
                                            {{ employee.first_name[0] }}{{ employee.last_name[0] }}
                                        </div>
                                        <div>
                                            <div class="emp-primary">{{ employee.first_name }} {{ employee.last_name }}</div>
                                            <div class="emp-secondary">
                                                <i class="fa-regular fa-envelope"></i> {{ employee.email }} &nbsp;|&nbsp; 
                                                <i class="fa-solid fa-phone"></i> {{ employee.phone || 'N/A' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge-position">{{ employee.position }}</span>
                                </td>
                                <td class="emp-primary" style="font-weight: 500;">
                                    ${{ parseFloat(employee.salary).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                                </td>
                                <td style="color: var(--text-muted);">
                                    <i class="fa-regular fa-calendar"></i> {{ formatDate(employee.date_of_joining) }}
                                </td>
                                <td>
                                    <div class="action-btns" style="justify-content: flex-end;">
                                        <button class="btn-icon btn-icon-edit" @click="openModal('edit', employee)" title="Edit Record">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button class="btn-icon btn-icon-delete" @click="deleteEmployee(employee.id)" title="Delete Record">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="5">
                                    <div class="empty-state">
                                        <i class="fa-solid fa-user-slash"></i>
                                        <h3>No Employees Found</h3>
                                        <p>Try refining your search or add a new record to get started.</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Dynamic Add/Edit Modal Overlay -->
        <div class="modal-overlay" :class="{ active: isModalOpen }" @click.self="closeModal">
            <div class="modal-card">
                <div class="modal-header">
                    <h3>{{ modalMode === 'add' ? 'Add New Employee' : 'Edit Employee Record' }}</h3>
                    <button class="close-btn" @click="closeModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <form @submit.prevent="submitForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" v-model="form.first_name" required>
                            <span class="text-error" v-if="errors.first_name">{{ errors.first_name[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" v-model="form.last_name" required>
                            <span class="text-error" v-if="errors.last_name">{{ errors.last_name[0] }}</span>
                        </div>
                        <div class="form-group form-full">
                            <label>Email Address</label>
                            <input type="email" class="form-control" v-model="form.email" required>
                            <span class="text-error" v-if="errors.email">{{ errors.email[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="+1 (555) 000-0000" v-model="form.phone">
                            <span class="text-error" v-if="errors.phone">{{ errors.phone[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label>Designation / Position</label>
                            <input type="text" class="form-control" placeholder="Software Engineer" v-model="form.position" required>
                            <span class="text-error" v-if="errors.position">{{ errors.position[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label>Annual Salary ($)</label>
                            <input type="number" step="0.01" class="form-control" placeholder="75000.00" v-model="form.salary" required>
                            <span class="text-error" v-if="errors.salary">{{ errors.salary[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label>Date of Joining</label>
                            <input type="date" class="form-control" v-model="form.date_of_joining" required>
                            <span class="text-error" v-if="errors.date_of_joining">{{ errors.date_of_joining[0] }}</span>
                        </div>
                    </div>

                    <div class="modal-actions">
                        <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            {{ modalMode === 'add' ? 'Save Employee' : 'Update Record' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Toast Notifications sliding container -->
        <div class="toast-container">
            <div 
                v-for="toast in toasts" 
                :key="toast.id" 
                class="toast" 
                :class="{ show: toast.show, error: toast.type === 'error' }"
            >
                <i :class="toast.type === 'success' ? 'fa-solid fa-circle-check' : 'fa-solid fa-triangle-exclamation'"></i>
                <span>{{ toast.message }}</span>
            </div>
        </div>

    </div>
@endverbatim

    <!-- Reactive Vue.js & Ajax Axios CDNs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                employees: [],
                searchQuery: '',
                selectedPosition: '',
                isModalOpen: false,
                modalMode: 'add',
                currentEmployeeId: null,
                form: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    position: '',
                    salary: '',
                    date_of_joining: ''
                },
                errors: {},
                toasts: []
            },
            computed: {
                totalStaff() {
                    return this.employees.length;
                },
                averageSalary() {
                    if (this.employees.length === 0) return '0.00';
                    const sum = this.employees.reduce((acc, emp) => acc + parseFloat(emp.salary), 0);
                    const avg = sum / this.employees.length;
                    return avg.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                },
                recentJoineesCount() {
                    const oneYearAgo = new Date();
                    oneYearAgo.setFullYear(oneYearAgo.getFullYear() - 1);
                    return this.employees.filter(emp => new Date(emp.date_of_joining) >= oneYearAgo).length;
                },
                uniquePositions() {
                    const positions = this.employees.map(emp => emp.position);
                    return [...new Set(positions)].sort();
                },
                filteredEmployees() {
                    return this.employees.filter(emp => {
                        const nameMatches = `${emp.first_name} ${emp.last_name}`.toLowerCase().includes(this.searchQuery.toLowerCase());
                        const emailMatches = emp.email.toLowerCase().includes(this.searchQuery.toLowerCase());
                        const posMatches = emp.position.toLowerCase().includes(this.searchQuery.toLowerCase());
                        
                        const matchesQuery = nameMatches || emailMatches || posMatches;
                        const matchesPosition = this.selectedPosition === '' || emp.position === this.selectedPosition;
                        
                        return matchesQuery && matchesPosition;
                    });
                }
            },
            mounted() {
                this.fetchEmployees();
            },
            methods: {
                fetchEmployees() {
                    axios.get('/api/employees')
                        .then(response => {
                            this.employees = response.data;
                        })
                        .catch(error => {
                            this.showToast('Failed to load employee records from database.', 'error');
                        });
                },
                openModal(mode, employee = null) {
                    this.errors = {};
                    this.modalMode = mode;
                    if (mode === 'edit' && employee) {
                        this.currentEmployeeId = employee.id;
                        this.form = { ...employee };
                    } else {
                        this.currentEmployeeId = null;
                        this.form = {
                            first_name: '',
                            last_name: '',
                            email: '',
                            phone: '',
                            position: '',
                            salary: '',
                            date_of_joining: ''
                        };
                    }
                    this.isModalOpen = true;
                },
                closeModal() {
                    this.isModalOpen = false;
                },
                submitForm() {
                    this.errors = {};
                    const apiCall = this.modalMode === 'add' 
                        ? axios.post('/api/employees', this.form)
                        : axios.put(`/api/employees/${this.currentEmployeeId}`, this.form);

                    apiCall.then(response => {
                        this.showToast(response.data.message, 'success');
                        this.fetchEmployees();
                        this.closeModal();
                    }).catch(error => {
                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        } else {
                            this.showToast('Something went wrong. Please check your inputs.', 'error');
                        }
                    });
                },
                deleteEmployee(id) {
                    if (confirm('Are you sure you want to permanently delete this employee record?')) {
                        axios.delete(`/api/employees/${id}`)
                            .then(response => {
                                this.showToast(response.data.message, 'success');
                                this.fetchEmployees();
                            })
                            .catch(error => {
                                this.showToast('Failed to delete the employee record.', 'error');
                            });
                    }
                },
                formatDate(dateStr) {
                    if (!dateStr) return '';
                    const options = { year: 'numeric', month: 'short', day: 'numeric' };
                    return new Date(dateStr).toLocaleDateString('en-US', options);
                },
                showToast(message, type = 'success') {
                    const toastId = Date.now();
                    this.toasts.push({
                        id: toastId,
                        message: message,
                        type: type,
                        show: false
                    });
                    
                    // Trigger reflow & show toast
                    setTimeout(() => {
                        const index = this.toasts.findIndex(t => t.id === toastId);
                        if (index !== -1) {
                            this.toasts[index].show = true;
                        }
                    }, 50);

                    // Fade out toast after 3 seconds
                    setTimeout(() => {
                        const index = this.toasts.findIndex(t => t.id === toastId);
                        if (index !== -1) {
                            this.toasts[index].show = false;
                            // Clean up array
                            setTimeout(() => {
                                this.toasts = this.toasts.filter(t => t.id !== toastId);
                            }, 300);
                        }
                    }, 3500);
                }
            }
        });
    </script>
</body>
</html>
