<?php

/*
 * OrangeHRM Enterprise is a closed sourced comprehensive Human Resource Management (HRM)
 * System that captures all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM Inc is the owner of the patent, copyright, trade secrets, trademarks and any
 * other intellectual property rights which subsist in the Licensed Materials. OrangeHRM Inc
 * is the owner of the media / downloaded OrangeHRM Enterprise software files on which the
 * Licensed Materials are received. Title to the Licensed Materials and media shall remain
 * vested in OrangeHRM Inc. For the avoidance of doubt title and all intellectual property
 * rights to any design, new software, new protocol, new interface, enhancement, update,
 * derivative works, revised screen text or any other items that OrangeHRM Inc creates for
 * Customer shall remain vested in OrangeHRM Inc. Any rights not expressly granted herein are
 * reserved to OrangeHRM Inc.
 *
 * Please refer http://www.orangehrm.com/Files/OrangeHRM_Commercial_License.pdf for the license which includes terms and conditions on using this software.
 *
 */

namespace AM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use AM\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * [UsersController]
 * 
 * Description of UsersController
 *
 * @author  Nuwan Chathuranga <nuwan@orangehrm.us.com>
 */
class UsersController extends Controller {

    /**
     *
     * @return array
     * @View()
     */
    public function getUsersAction() {
        $users = $this->getDoctrine()->getRepository('AMUserBundle:User')->findAll();
        return array('users' => $users);
    }

    /**
     *
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="AMUserBundle:User")
     */
    public function getUserAction(User $user) {
        return array('user' => $user);
    }

}
