<?php

class StorageController extends \BaseController {


	private $storage_path;
	/**
	 * Método para obtener una imagen de contenido subida en el CMS
	 * @param  string $hash MD5 file
	 * @param  string $size Tamaño de la imagen que requerimos
	 * @return string       Recorte de la imagen solicitada
	 */
 	public function image( $hash = null, $size = '' , $path = 'uploads' ){
 		$this->storage_path = storage_path() . '/'.$path.'/' . $hash;

 		$mine = mime_content_type($this->storage_path);

 		$img = Image::cache( function( $image ) use ( $hash, $size ) {

 			if ( $size ){

 				$array_size = explode( 'x', $size );
 				if ( !isset( $array_size[1] ) )
 					$array_size[1] = $array_size[0];
 				return $image->make( $this->storage_path )->resize( $array_size[0], $array_size[1] , function( $constraint ){
 						$constraint->aspectRatio();
 						$constraint->upsize();
 					});

 			} else {
 				list( $width, $height ) = getimagesize( $this->storage_path );
 				if ( $width > 1000 ){

 					return $image->make( $this->storage_path )->resize(1000, null, function( $constraint ){
 						$constraint->aspectRatio();
 						$constraint->upsize();
 					});
 				} else
 					return $image->make( $this->storage_path );
 			}
 		}, 10000, true );



 		if(ends_with($mine,"png"))
 			return $img->response('png', 75 );
 		elseif(ends_with($mine,"gif"))
 			return $img->response('gif');
 		else
 			return $img->response('jpg', 75 );
 	}



 	/**
 	 * Método para devolver el video tipo stream a la vista
 	 * @param  string $hash Nombre del video hasheado
 	 * @return string       Respuesta stream mp4
 	 */
 	public function video( $hash ){
 		$this->storage_path = storage_path();
 		$content = $this->storage_path . '/uploads/' . $hash;
 		$headers = [
 			'Content-Type'	=> 'video/mp4'
 		];
 		return Response::stream( function() use ($content ) {
 			$stream = fopen( $content, 'r' );
 			fpassthru( $stream );
 		}, 200, $headers );
 	}


 	public function download( $hash ){
 		$this->storage_path = storage_path();
 		$content = $this->storage_path . '/uploads/' . $hash;


 		return \Response::download($content, $hash);
 	}


}