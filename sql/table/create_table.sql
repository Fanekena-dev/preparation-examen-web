CREATE TABLE tea_variety (
    variety_id VARCHAR(70) PRIMARY KEY,
    variety_name VARCHAR(200),
    variety_occupancy_surface DECIMAL(10,2),
    variety_yield_per_foot DECIMAL(10,2)
);

CREATE TABLE tea_plot (
    plot_number INT PRIMARY KEY,
    plot_surface DECIMAL(10,2),
    tea_variety_planted VARCHAR(70),
    FOREIGN KEY (tea_variety_planted) REFERENCES tea_variety(variety_id)
);

CREATE TABLE tea_human_gender (
    human_gender_id VARCHAR(70) PRIMARY KEY,
    human_gender VARCHAR(100)
);

CREATE TABLE tea_picker (
    picker_id VARCHAR(70) PRIMARY KEY,
    picker_name VARCHAR(200),
    picker_gender VARCHAR(70),
    picker_date_of_birth DATE,
    FOREIGN KEY (picker_gender) REFERENCES tea_human_gender(human_gender_id)
);

CREATE TABLE tea_admin (
    admin_id VARCHAR(70) PRIMARY KEY,
    admin_pwd VARCHAR(120)
);

CREATE TABLE tea_expense_category (
    expense_category_id VARCHAR(70) PRIMARY KEY,
    expense_category VARCHAR(100)
);

CREATE TABLE tea_salary_amount_picker (
    salary_amount_picker_id VARCHAR(70) PRIMARY KEY,
    insert_date DATE DEFAULT CURRENT_TIMESTAMP,
    salary_amount DECIMAL(15,2),
    picker_id VARCHAR(70),
    FOREIGN KEY (picker_id) REFERENCES tea_picker(picker_id)
);

CREATE TABLE tea_user (
    user_id VARCHAR(70) PRIMARY KEY,
    username VARCHAR(100) UNIQUE,
    user_pwd VARCHAR(120)
);

CREATE TABLE tea_picking (
    picking_id VARCHAR(70) PRIMARY KEY,
    picking_date DATE,
    picker_id VARCHAR(70),
    plot_number INT,
    picked_weight DECIMAL(10,2),
    FOREIGN KEY (picker_id) REFERENCES tea_picker(picker_id),
    FOREIGN KEY (plot_number) REFERENCES tea_plot(plot_number)
);

CREATE TABLE tea_expense (
    expense_id VARCHAR(70) PRIMARY KEY,
    expense_date DATE,
    expense_category VARCHAR(70),
    expense_amount DECIMAL(15,2),
    FOREIGN KEY (expense_category) REFERENCES tea_expense_category(expense_category_id)
);