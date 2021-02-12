<?
	if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

	include_once("$g4[path]/lib/thumb.lib.php");

	$cols  = 1; //  이미지 가로갯수 //  이미지 세로 갯수는 메인에서 지정(총 이미지 수)
	$image_h  = 1; // 이미지 상하 간격
	$col_width = (int)(99 / $cols);

	$img_width = 600; //썸네일 가로길이
	$img_height = 390; //썸네일 세로길이
	$img_quality = 90; //퀼리티 100이하로 설정 일부 php버전에서는 10이하의 수로 처리 될 수 있삼

	if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

	$data_path = $g4[path]."/data/file/$bo_table";
	$thumb_path = $data_path.'/thumb_img_list'; //썸네일 이미지 생성 디렉토리

	@mkdir($thumb_path, 0707);
	@chmod($thumb_path, 0707);

	/*
	//공지사항 맨위로 올림
	 if (count($list) >1 ) {
	foreach( $list as $key => $value) $tmp_notice[$key] = $value['is_notice'] *100000 + $value['wr_id'];
	 array_multisort($tmp_notice, SORT_DESC, $list);
	}
	*/
?>

<style>
.swiper-MainList4 { width: 600px; height: 671px; margin: 0 auto; position: relative; box-shadow:10px 10px 15px 0px rgba(0,0,0,0.5); background: #fff; }

.swiper-MainList4 .swiper-slide a { display: inline-block; margin:0 auto; width: 100%; height: 100%; color: #000; }

.swiper-MainList4 .swiper-slide a img { text-align: center; }

.MainList4_div { height: 281px; padding: 50px 45px; box-sizing: border-box; }
.MainList4_div-1 { font-size: 25px; line-height: 38px; }
.MainList4_div-2 { padding: 30px 0; }
.MainList4_div-3 { font-size: 16px; font-weight: 300; }
.MainList4_div-3 > span { font-weight: 500; }

.MainList4_div2 { position: absolute; bottom: 85px; right: 32px; font-size: 18px; color: #775844; border-bottom: 2px solid #baada6; line-height: 35px; }
</style>

<div class="swiper-container swiper-MainList4">
	<div class="swiper-wrapper">
		<? for ($i=0; $i<count($list); $i++) {

			// 첨부파일 이미지가 있으면 썸을 생성, 아니면 pass~!
			if ($list[$i][file][0][file]) {

				// 이미지 체크
				$image = urlencode($list[$i][file][0][file]);
				$ori="$g4[path]/data/file/$bo_table/" . $image;
				$ext = strtolower(substr(strrchr($ori,"."), 1)); //확장자

				// 이미지가 있다면.
				if ($ext=="gif"||$ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="bmp"||$ext=="tif"||$ext=="tiff") {

					// 섬네일 경로 만들기 + 섬네일 생성
					$list_img_path = $list[$i][file][0][path]."/".$list[$i][file][0][file];
					$list_thumb = thumbnail($list_img_path ,$img_width, $img_height,0,2,100);

				}

			} else {                ////  첨부파일 이미지가 없으면

				$list_thumb = "/res/images/noimg.jpg";

			}
			
			$img = "<img src='{$list_thumb}' style='width:{$img_width}px; height:{$img_height}px;' />";
		?>

		<div class="swiper-slide" >
			<a href='<?=$list[$i][href]?>'>
				<?=$img?>

				<div class="MainList4_div">
					<div class="MainList4_div-1">
						<?=$list[$i][wr_subject]?>
					</div>
					<div class="MainList4_div-2">
						<?=cut_str($list[$i][wr_content], 150, '...');?>
					</div>
					<div class="MainList4_div-3">
						<span>Date.</span>&nbsp;<?=date("Y.m.d",strtotime($list[$i][wr_datetime]));?>
					</div>
				</div>
			</a>
		</div>
		<? } ?>
	</div>

	<div class="MainList4_div2">Read More</div>
</div>