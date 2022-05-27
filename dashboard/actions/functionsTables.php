<?php
    class gallery{
        public function select($conexion){
            $query = "SELECT * FROM galeria";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_galeria"];
                $sub_array["foto"] = $fila["gal_foto"];
                $sub_array["titulo"] = $fila["gal_titulo"];
                $sub_array["text"] = $fila["gal_text"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO galeria(gal_titulo, gal_text, gal_foto)VALUES(:titulo, :texto, :foto)");
            $resultados = $stmt->execute(
                array(
                    ':titulo' => $_POST["title"],
                    ':texto' => $_POST["textPop"],
                    ':foto' => $photo,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE galeria SET gal_titulo=:titulo, gal_text=:texto, gal_foto=:foto WHERE id_galeria = :id");
            $resultado = $stmt->execute(
                array(
                    ':titulo' => $_POST["title"],
                    ':texto' => $_POST["textPop"],
                    ':foto' => $photo,
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT gal_foto FROM galeria WHERE id_galeria=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["gal_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM galeria WHERE id_galeria = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM galeria WHERE id_galeria=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_galeria"];
                $salida["title"] = $fila["gal_titulo"];
                $salida["textPop"] = $fila["gal_text"];
                if($fila["gal_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["gal_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["gal_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["gal_foto"].'">';
                }
            }
            return $salida;
        }
    };
    class service{
        public function select($conexion){
            $query = "SELECT * FROM servicios";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_servicios"];
                $sub_array["icon"] = $fila["serv_icon"];
                $sub_array["titulo"] = $fila["serv_titulo"];
                $sub_array["desc1"] = $fila["serv_desc1"];
                $sub_array["desc2"] = $fila["serv_desc2"];
                $sub_array["foto"] = $fila["serv_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO servicios(serv_icon, serv_titulo, serv_desc1, serv_desc2, serv_foto)
            VALUES(:icon, :titulo, :desc1, :desc2, :foto)");
            $resultados = $stmt->execute(
                array(
                    ':icon' => $_POST["icon"],
                    ':titulo' => $_POST["title"],
                    ':desc1' => $_POST["textSimple"],
                    ':desc2' => $_POST["textPop"],
                    ':foto' => $photo,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE servicios 
            SET serv_icon=:icon, serv_titulo=:titulo, serv_desc1=:desc1, serv_desc2=:desc2, serv_foto=:foto 
            WHERE id_servicios = :id");
            $resultado = $stmt->execute(
                array(
                    ':icon' => $_POST["icon"],
                    ':titulo' => $_POST["title"],
                    ':desc1' => $_POST["textSimple"],
                    ':desc2' => $_POST["textPop"],
                    ':foto' => $photo,
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT serv_foto FROM servicios WHERE id_servicios=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["serv_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM servicios WHERE id_servicios = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM servicios WHERE id_servicios=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_servicios"];
                $salida["iconShow"] = $fila["serv_icon"];
                $salida["title"] = $fila["serv_titulo"];
                $salida["textSimple"] = $fila["serv_desc1"];
                $salida["textPop"] = $fila["serv_desc2"];
                if($fila["serv_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["serv_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["serv_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["serv_foto"].'">';
                }            
            }
            return $salida;
        }
    };
    class why{ 
        public function selectElegirnos($conexion){
            $query = "SELECT * FROM elegirnos";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_elegirnos"];
                $sub_array["formato"] = $fila["ele_formato"];
                $sub_array["text"] = $fila["ele_texto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function createElegirnos($conexion){
            $stmt = $conexion->prepare("INSERT INTO elegirnos(ele_formato, ele_texto)
            VALUES(:format, :text)");
            $resultados = $stmt->execute(
                array(
                    ':format' => $_POST["format"],
                    ':text' => $_POST["text"],
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function editElegirnos($conexion){
            $stmt = $conexion->prepare("UPDATE elegirnos 
            SET ele_formato=:format, ele_texto=:text 
            WHERE id_elegirnos = :id");
            $resultado = $stmt->execute(
                array(
                    ':format' => $_POST["format"],
                    ':text' => $_POST["text"],
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function deleteElegirnos($id, $conexion){
            if($id){
                $stmt = $conexion->prepare("DELETE FROM elegirnos WHERE id_elegirnos = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOneE($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM elegirnos WHERE id_elegirnos=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_elegirnos"];
                $salida["format"] = $fila["ele_formato"];
                $salida["text"] = $fila["ele_texto"];
            }
            return $salida;
        }
        public function selectCarrusel($conexion){
            $query = "SELECT * FROM carrusel";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_carrusel"];
                $sub_array["foto"] = $fila["carr_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function createCarrusel($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO carrusel(carr_foto)
            VALUES(:foto)");
            $resultados = $stmt->execute(
                array(
                    ':foto' => $photo,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function editCarrusel($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE carrusel 
            SET carr_foto=:foto 
            WHERE id_carrusel = :id");
            $resultado = $stmt->execute(
                array(
                    ':foto' => $photo,
                    ':id' => $_POST["id2"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function deleteCarrusel($id, $conexion){
            if($id){
                $query = "SELECT carr_foto FROM carrusel WHERE id_carrusel=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["carr_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM carrusel WHERE id_carrusel = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOneC($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM carrusel WHERE id_carrusel=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_carrusel"];
                if($fila["carr_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["carr_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["carr_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["carr_foto"].'">';
                }            
            }
            return $salida;
        }
    };
    class view{
        public function select($conexion){
            $query = "SELECT * FROM numeros";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_numeros"];
                $sub_array["icon"] = $fila["num_iconos"];
                $sub_array["titulo"] = $fila["num_titulo"];
                $sub_array["cantidad"] = $fila["num_cantidad"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $stmt = $conexion->prepare("INSERT INTO numeros(num_iconos, num_titulo, num_cantidad)
            VALUES(:icon, :title, :quantity)");
            $resultados = $stmt->execute(
                array(
                    ':icon' => $_POST["icon"],
                    ':title' => $_POST["title"],
                    ':quantity' => $_POST["quantity"],
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $stmt = $conexion->prepare("UPDATE numeros 
            SET num_iconos=:icon, num_titulo=:title, num_cantidad=:quantity 
            WHERE id_numeros = :id");
            $resultado = $stmt->execute(
                array(
                    ':icon' => $_POST["icon"],
                    ':title' => $_POST["title"],
                    ':quantity' => $_POST["quantity"],
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $stmt = $conexion->prepare("DELETE FROM numeros WHERE id_numeros = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM numeros WHERE id_numeros=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_numeros"];
                $salida["iconShow"] = $fila["num_iconos"];
                $salida["title"] = $fila["num_titulo"];
                $salida["quantity"] = $fila["num_cantidad"];
            }
            return $salida;
        }
    };
    class course{
        public function select($conexion){
            $query = "SELECT * FROM cursos";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_cursos"];
                $sub_array["titulo"] = $fila["cur_titulo"];
                $sub_array["text1"] = $fila["cur_text1"];
                $sub_array["text2"] = $fila["cur_text2"];
                $sub_array["text3"] = $fila["cur_text3"];
                $sub_array["pdf"] = $fila["cur_pdf"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $pdf = '';
            if($_FILES["temary"]["name"] != ''){
                $pdf = uploadPdf();
            }
            $stmt = $conexion->prepare("INSERT INTO cursos(cur_titulo, cur_text1, cur_text2, cur_text3, cur_pdf)
            VALUES(:title, :sectionOne, :sectionTwo, :sectionThree, :pdf)");
            $resultados = $stmt->execute(
                array(
                    ':title' => $_POST["title"],
                    ':sectionOne' => $_POST["sectionOne"],
                    ':sectionTwo' => $_POST["sectionTwo"],
                    ':sectionThree' => $_POST["sectionThree"],
                    ':pdf' => $pdf,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $pdf = '';
            if($_FILES["temary"]["name"] != ''){
                unlink("../docs/".$_POST["hiddenPdf"]);
                $pdf = uploadPdf();
            }else{
                $pdf = $_POST["hiddenPdf"];
            }
            $stmt = $conexion->prepare("UPDATE cursos 
            SET cur_titulo=:title, cur_text1=:sectionOne, cur_text2=:sectionTwo, cur_text3=:sectionThree, cur_pdf=:pdf 
            WHERE id_cursos = :id");
            $resultado = $stmt->execute(
                array(
                    ':title' => $_POST["title"],
                    ':sectionOne' => $_POST["sectionOne"],
                    ':sectionTwo' => $_POST["sectionTwo"],
                    ':sectionThree' => $_POST["sectionThree"],
                    ':pdf' => $pdf,
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT cur_pdf FROM cursos WHERE id_cursos=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $pdfRemove = $fila["cur_pdf"];
                }
                if($pdfRemove != ''){
                    unlink("../docs/".$pdfRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM cursos WHERE id_cursos = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM cursos WHERE id_cursos=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_cursos"];
                $salida["title"] = $fila["cur_titulo"];
                $salida["sectionOne"] = $fila["cur_text1"];
                $salida["sectionTwo"] = $fila["cur_text2"];
                $salida["sectionThree"] = $fila["cur_text3"];
                if($fila["cur_pdf"] != ''){
                    $salida["pdf"] = 
                    '<img src="docs/' . $fila["cur_pdf"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPdf" value="'.$fila["cur_pdf"].'">';
                } else {
                    $salida["pdf"] = 
                    '<input type="hidden" name="hiddenPdf" value="'.$fila["cur_pdf"].'">';
                }            
            }
            return $salida;
        }
    };
    class testimony{
        public function select($conexion){
            $query = "SELECT * FROM testimonios";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_testimonios"];
                $sub_array["foto"] = $fila["test_foto"];
                $sub_array["nombre"] = $fila["test_nombre"];
                $sub_array["area"] = $fila["test_area"];
                $sub_array["text"] = $fila["test_text"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO testimonios(test_foto, test_nombre, test_area, test_text)
            VALUES(:foto, :name, :area, :text)");
            $resultados = $stmt->execute(
                array(
                    ':foto' => $photo,
                    ':name' => $_POST["name"],
                    ':area' => $_POST["area"],
                    ':text' => $_POST["text"],
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE testimonios 
            SET test_foto=:foto, test_nombre=:name, test_area=:area, test_text=:text 
            WHERE id_testimonios = :id");
            $resultado = $stmt->execute(
                array(
                    ':foto' => $photo,
                    ':name' => $_POST["name"],
                    ':area' => $_POST["area"],
                    ':text' => $_POST["text"],
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT test_foto FROM testimonios WHERE id_testimonios=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["test_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM testimonios WHERE id_testimonios = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM testimonios WHERE id_testimonios=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_testimonios"];
                $salida["name"] = $fila["test_nombre"];
                $salida["area"] = $fila["test_area"];
                $salida["text"] = $fila["test_text"];
                if($fila["test_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["test_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["test_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["test_foto"].'">';
                }            
            }
            return $salida;
        }
    };
    class team{
        public function select($conexion){
            $query = "SELECT * FROM equipo";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_equipo"];
                $sub_array["nombre"] = $fila["equi_nombre"];
                $sub_array["area"] = $fila["equi_area"];
                $sub_array["redsocial1"] = $fila["equi_redsocial1"];
                $sub_array["redsocial2"] = $fila["equi_redsocial2"];
                $sub_array["redsocial3"] = $fila["equi_redsocial3"];
                $sub_array["foto"] = $fila["equi_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO equipo(equi_nombre, equi_area, equi_redsocial1, equi_redsocial2, equi_redsocial3, equi_foto)
            VALUES(:name, :area, :facebook, :instagram, :twitter, :foto)");
            $resultados = $stmt->execute(
                array(
                    ':name' => $_POST["name"],
                    ':area' => $_POST["area"],
                    ':facebook' => $_POST["facebook"],
                    ':instagram' => $_POST["instagram"],
                    ':twitter' => $_POST["twitter"],
                    ':foto' => $photo,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE equipo 
            SET equi_nombre=:name, equi_area=:area, equi_redsocial1=:facebook, equi_redsocial2=:instagram, equi_redsocial3=:twitter, equi_foto=:foto
            WHERE id_equipo = :id");
            $resultado = $stmt->execute(
                array(
                    ':name' => $_POST["name"],
                    ':area' => $_POST["area"],
                    ':facebook' => $_POST["facebook"],
                    ':instagram' => $_POST["instagram"],
                    ':twitter' => $_POST["twitter"],
                    ':foto' => $photo,
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT equi_foto FROM equipo WHERE id_equipo=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["equi_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM equipo WHERE id_equipo = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM equipo WHERE id_equipo=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_equipo"];
                $salida["name"] = $fila["equi_nombre"];
                $salida["area"] = $fila["equi_area"];
                $salida["facebook"] = $fila["equi_redsocial1"];
                $salida["instagram"] = $fila["equi_redsocial2"];
                $salida["twitter"] = $fila["equi_redsocial3"];
                if($fila["equi_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["equi_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["equi_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["equi_foto"].'">';
                }            
            }
            return $salida;
        }
    };
    class news{
        public function select($conexion){
            $query = "SELECT * FROM noticias";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_noticias"];
                $sub_array["ciudad"] = $fila["not_ciudad"];
                $sub_array["fecha"] = $fila["not_fecha"];
                $sub_array["titulo"] = $fila["not_titulo"];
                $sub_array["descripcion"] = $fila["not_descripcion"];
                $sub_array["sitioweb"] = $fila["not_sitioweb"];
                $sub_array["foto"] = $fila["not_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function create($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                $photo = uploadPhoto();
            }
            $stmt = $conexion->prepare("INSERT INTO noticias(not_ciudad, not_fecha, not_titulo, not_descripcion, not_sitioweb, not_foto)
            VALUES(:city, :date, :title, :description, :website, :foto)");
            $resultados = $stmt->execute(
                array(
                    ':city' => $_POST["city"],
                    ':date' => $_POST["date"],
                    ':title' => $_POST["title"],
                    ':description' => $_POST["description"],
                    ':website' => $_POST["website"],
                    ':foto' => $photo,
                )
            );
            if(!empty($resultados)){
                echo 'Registro creado';
            }
        }
        public function edit($conexion){
            $photo = '';
            if($_FILES["photo"]["name"] != ''){
                unlink("../img/".$_POST["hiddenPhoto"]);
                $photo = uploadPhoto();
            }else{
                $photo = $_POST["hiddenPhoto"];
            }
            $stmt = $conexion->prepare("UPDATE noticias 
            SET not_ciudad=:city, not_fecha=:date, not_titulo=:title, not_descripcion=:description, not_sitioweb=:website, not_foto=:foto
            WHERE id_noticias = :id");
            $resultado = $stmt->execute(
                array(
                    ':city' => $_POST["city"],
                    ':date' => $_POST["date"],
                    ':title' => $_POST["title"],
                    ':description' => $_POST["description"],
                    ':website' => $_POST["website"],
                    ':foto' => $photo,
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo 'Registro actualizado';
            }
        }
        public function delete($id, $conexion){
            if($id){
                $query = "SELECT not_foto FROM noticias WHERE id_noticias=".$id;
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                foreach($resultado as $fila){
                    $photoRemove = $fila["not_foto"];
                }
                if($photoRemove != ''){
                    unlink("../img/".$photoRemove);
                }
                $stmt = $conexion->prepare("DELETE FROM noticias WHERE id_noticias = :id");
                $resultado = $stmt->execute(
                    array(
                        ':id' => $id
                    )
                );
                if(!empty($resultado)){
                    echo "Registro eliminado";
                }
            }
        }
        public function selectOne($id, $conexion){
            $salida = array();
            $query = "SELECT * FROM noticias WHERE id_noticias=".$id;
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $salida["id"] = $fila["id_noticias"];
                $salida["city"] = $fila["not_ciudad"];
                $salida["date"] = $fila["not_fecha"];
                $salida["title"] = $fila["not_titulo"];
                $salida["description"] = $fila["not_descripcion"];
                $salida["website"] = $fila["not_sitioweb"];
                if($fila["not_foto"] != ''){
                    $salida["photo"] = 
                    '<img src="img/' . $fila["not_foto"] . '" class="img-thumbnail" width="55" height="35" />
                    <input type="hidden" name="hiddenPhoto" value="'.$fila["not_foto"].'">';
                } else {
                    $salida["photo"] = 
                    '<input type="hidden" name="hiddenPhoto" value="'.$fila["not_foto"].'">';
                }            
            }
            return $salida;
        }
    };

    function uploadPhoto(){
        if (isset($_FILES["photo"])) {
            $extension = explode('.', $_FILES["photo"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './../img/'.$nuevo_nombre;
            move_uploaded_file($_FILES["photo"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function uploadPdf(){
        if (isset($_FILES["temary"])) {
            $extension = explode('.', $_FILES["temary"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './../docs/'.$nuevo_nombre;
            move_uploaded_file($_FILES["temary"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }
?>