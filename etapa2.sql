SELECT 
	departments.dept_name,
	CONCAT(employees.first_name, ' ', employees.last_name),
	COUNT(dept_emp.emp_no) AS QTD
FROM 
	dept_emp 
INNER JOIN
	departments
ON
	departments.dept_no = dept_emp.dept_no
INNER JOIN
	employees
ON 
	employees.emp_no = dept_emp.emp_no
GROUP BY
	dept_emp.emp_no
ORDER BY
	COUNT(dept_emp.emp_no) DESC
LIMIT 
	10;