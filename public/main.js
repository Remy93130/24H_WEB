function getId(id) { return document.getElementById(id); }

function showVisualizeInformationModal(id) {
	let modal = getId('info-'+id);

	modal.classList.remove('hidden');
	window.onclick = function(e) {
		if (e.target === modal)
			modal.classList.add('hidden');
	}
}

function closeModal(id) {
	getId(id).classList.add('hidden');
}