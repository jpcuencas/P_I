<?php

class bdacesso
{

	private $servidor,$usuario,$pass,$esquema;
	private $error,$msgerror;
	private $conexion;
	private $resultado;
	public function __construct()
	{
		$this->servidor="localhost";
		$this->usuario="";
		$this->pass="";
		$this->esquema="pibd";
		$this->error=false;
		$this->msgerror="";
		$this->conexion=null;
		
		$this->resultado=null;
	}
	public function __destruct()
	{
		$this->servidor="";
		$this->usuario="";
		$this->pass="";
		$this->esquema="";
		$this->error=false;
		$this->msgerror="";
		$this->conexion=null;
		
		$this->resultado=null;
	}


	
	public function getServidor()
	{
		return $this->servidor;
	}
	public function setServidor($ser)
	{
		$this->servidor=$ser;
	}
	
	public function getUsuario()
	{
		return $this->usuario;
	}
	public function setUsuario($ser)
	{
		$this->usuario=$ser;
	}
	
	public function getPassword()
	{
		return $this->pass;
	}
	public function setPassword($ser)
	{
		$this->pass=$ser;
	}
	public function getConexion()
	{
		return $this->conexion;
	}
	public function setConexion($ser)
	{
		$this->conexion=$ser;
	}
	public function getEsquema()
	{
		return $this->esquema;
	}
	public function setEsquema($ser)
	{
		$this->esquema=$ser;
	}
	
	
	public function getError()
	{
		return $this->esquema;
	}
	public function getMsgError()
	{
		return $this->esquema;
	}
	
	public function getResultado()
	{
		return $this->resultado;
	}
	
	public function conectarBD($s,$u,$p,$e)
	{	
		$this->conexion=@mysql_connect($s,$u,$p);
		if($this->conexion!=false)
		{
			if(@mysql_select_db($e,$this->conexion)==false)
			{
				$this->error=true;
				$this->msgerror="error de base de datos";
				return null;
			}
		}
		else
		{
			$this->error=true;
			$this->msgerror="error de conexion";
			return null;
		}
	}
	
	public function desconectarBD()
	{	
		$this->error=@mysql_close($this->conexion);
	}
	
	public function consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc)
	{
		$query="SELECT " . $campos . " FROM " . $tabla;
		if($donde!="")
		{
			$query=$query . " WHERE " . $donde;
		}
		if($agrupado!="")
		{
			$query=$query . " GROUP BY " . $agrupado;
		}
		if($ordenado!="")
		{
			if(!$asc)
			{
				$query=$query . " ORDER BY " . $ordenado . " DES";
			}
			else
			{
				$query=$query . " ORDER BY " . $ordenado . " ASC";
			}
		}
		if($this->conexion!=null)
		{
			
			//echo($query);
			$res=@mysql_query($query,$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de consulta";
				return null;
			}
			else
			{
				$resultado=$res;
				return $res;
				
			}
			return $res;
		}
		else
		{
			$this->conectarBD($this->getServidor(),$this->getUsuario(),$this->getPassword(),$this->getEsquema());
			//echo($query);
			$res=@mysql_query($query,$this->conexion);
			mysql_set_charset('utf8',$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de borrado";
				return null;
			}
			else
			{
				$resultado=$res;
				return res;
			}

		}
					
	}
	
	public function insertardatos($tabla,$valores)
	{
	
		if($this->conexion!=null)
		{
			$query="INSERT INTO " . $tabla . " VALUES(" . $valores . ");";
			$res=@mysql_query($query,$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de insercion";
				return null;
			}
			else
			{
				$resultado=$res;
				return $res;
			}
		}
		else
		{
			$this->conectarBD($this->getServidor(),$this->getUsuario(),$this->getPassword(),$this->getEsquema());
			$query="INSERT INTO " . $tabla . " VALUES(" . $valores . ");";
			$res=@mysql_query($query,$this->conexion);
			mysql_set_charset('utf8',$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de borrado";
				return null;
			}
			else
			{
				$resultado=$res;
				return res;
			}
		}
	}
	public function actualizardatos($tabla,$columnas,$donde)
	{
		if($this->conexion!=null)
		{
			$query="UPDATE " . $tabla . " SET " . $columnas . " WHERE " . $donde;
			$res=@mysql_query($query,$this->conexion);
			mysql_set_charset('utf8',$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de actualizacion";
				return null;
			}
			else
			{
				$resultado=$res;
				return res;
			}
		}
		else
		{
			$this->conectarBD($this->getServidor(),$this->getUsuario(),$this->getPassword(),$this->getEsquema());
			$query="UPDATE " . $tabla . " SET " . $columnas . " WHERE " . $donde;
			$res=@mysql_query($query,$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de borrado";
				return null;
			}
			else
			{
				$resultado=$res;
				return res;
			}
		}
	}
	public function borrardatos($tabla,$donde)
	{
		if($this->conexion!=null)
		{
			$query="DELETE FROM " . $tabla . " WHERE " . $donde;
			$res=@mysql_query($query,$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de borrado";
				return null;
			}
			else
			{
				$resultado=$res;
				return res;
			}
		}
		else
		{
			$this->conectarBD($this->getServidor(),$this->getUsuario(),$this->getPassword(),$this->getEsquema());
						$query="DELETE FROM " . $tabla . " WHERE " . $donde;
			$res=@mysql_query($query,$this->conexion);
			mysql_set_charset('utf8',$this->conexion);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de borrado";
			}
			else
			{
				$resultado=$res;
				return res;
			}
			
		}
	}
	
}
?>