const selectAllCheckbox = document.getElementById('select-all');

selectAllCheckbox.addEventListener('change', () => {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(checkbox => {
    if (selectAllCheckbox.checked) {
      checkbox.checked = true;
    } else {
      checkbox.checked = false;
    }
  });
});