<?php
class bdconsulta
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
		
		$this->resultado="";
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
		
		$this->resultado="";
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
	public function setServidor($ser)
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
		return $this->error;
	}
	public function getMsgError()
	{
		return $this->msgerror;
	}
	
	public function getResultado()
	{
		return $this->resultado;
	}
	
	public function conectarBD($s,$u,$p,$e)
	{	
		$this->conexion = new mysqli($s,$u,$p,$e);
		if($this->conexion->connect_errno)
		{
			$this->error=true;
			$this->msgerror="error de conexion";
		}
	}
	
	public function desconectarBD()
	{	
		$this->conexion->close();
	}
	
	public function consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc)
	{
		if($this->conexion->connect_errno)
		{
			//$this->error=true;
			$this->conectarBD($this->servidor,$this->usuario,$this->pass,$this->esquema);
			$this->msgerror="error no esta conectado";
		}
		else
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
					$query=$query . " ORDER BY " . $ordenado . "DES";
				}
				else
				{
					$query=$query . " ORDER BY " . $ordenado . "ASC";
				}
			}
			$res=$this->conexion->query($query);
			if($res==false)
			{
				$this->error=true;
				$this->msgerror="error de consulta";
			}
			else
			{
				$resultado=$res;
			}
			$res->close();
					
		}
	}
}
?>