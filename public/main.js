let current_modal = null;

function getId(id) { return document.getElementById(id); }

function showVisualizeInformationModal(id) {
	if (current_modal !== null) current_modal.classList.add('hidden');

	let modal = getId('info-'+id);
	current_modal = modal;

	modal.classList.remove('hidden');
}

function closeModal(id) {
	getId(id).classList.add('hidden');
}