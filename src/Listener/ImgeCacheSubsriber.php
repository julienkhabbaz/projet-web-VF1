<?php

namespace App\Listener;

use App\Entity\Restaurant;
use Doctrine\Common\EventSubscriber;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;

class ImgeCacheSubsriber implements EventSubscriber
{

	/**
	 * 
	 * @var CacheManager
	 */
	private $cacheManger;

	/**
	 * 
	 * @var UploaderHelper
	 */
	private $uploaderHelper;

	public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper)
	{
	}
	public function getSubscribedEvents()
	{

		return [
			'preRemove',
			'PreUpdate',
		];
	}

	public function preRemove(LifecycleEventArgs $args)
	{
		$entity = $args->getEntity();
		if (!$entity instanceof  Restaurant) {
			return;
		}
		$this->cacheManger->remove($this->uploaderHelper->asset($entity, 'imageFile'));
	}
	public function preUpdate(PreUpdateEventArgs $args)
	{
		$entity = $args->getEntity();
		if (!$entity instanceof Restaurant) {
			return;
		}

		if ($entity->getImageFile() instanceof UploadedFile) {
			$this->cacheManger->remove($this->uploaderHelper->asset($entity, 'imageFile'));
		}
	}
}
