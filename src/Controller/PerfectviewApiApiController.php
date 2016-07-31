<?php

namespace Bixie\PerfectviewApi\Controller;

use Bixie\PerfectviewApi\SoapTypes\PvRelationData;
use Pagekit\Application as App;
use Pagekit\User\Model\User;

/**
 */
class PerfectviewApiApiController {

	/**
	 * @Access("system: access settings")
	 * @Route("/userrelations/{id}", methods="POST", requirements={"id"="\d+"})
	 * @Request({"user": "array"}, csrf=true)
	 */
	public function userrelationsAction ($data, $id) {
		//sanity check
		if (!$user = User::find($id)) {
			App::abort(404, 'No user found');
		}
		//new data is could have been not saved yet
		User::getManager()->getMetadata($user)->setValues($user, $data, false, true);
		/** @var PvRelationData $relation */
		$relation = App::pv_api()->getRelationFromUser($user);
		App::pv_api()->getEntityValues($relation);
		$relation_code = !$relation->getIsDummy() ? $relation->getFieldDataValues()->getValue('PER_relationcode') : '';
		$parent_relation = App::pv_api()->getParentRelationFromUser($user);
		App::pv_api()->getEntityValues($parent_relation);
		$parent_relation_code = !$parent_relation->getIsDummy() ? $parent_relation->getFieldDataValues()->getValue('ORG_relationcode') : '';

		return compact('relation', 'relation_code', 'parent_relation', 'parent_relation_code');

	}

}
