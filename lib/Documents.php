<?php

namespace Spaceinvoices;

class Documents extends ApiResource {
	const path = "documents";

	use ApiOperations\All;
	use ApiOperations\Create;
	use ApiOperations\Delete;
	use ApiOperations\Edit;
	use ApiOperations\GetById;
}
?>