package com.example.prueba.entity;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "cliente")
public class Client {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    private int id;
    private String nombres;
    private String apellido_paterno;
    private String apellido_materno;
    private int dni;

    // Getter and setter for id
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    // Getter and setter for nombres
    public String getNombres() {
        return nombres;
    }

    public void setNombres(String nombres) {
        this.nombres = nombres;
    }

    // Getter and setter for apellidoPaterno
    public String getApellidoPaterno() {
        return apellido_paterno;
    }

    public void setApellidoPaterno(String apellidoPaterno) {
        this.apellido_paterno = apellidoPaterno;
    }

    // Getter and setter for apellidoMaterno
    public String getApellidoMaterno() {
        return apellido_materno;
    }

    public void setApellidoMaterno(String apellidoMaterno) {
        this.apellido_materno = apellidoMaterno;
    }

    // Getter and setter for dni
    public int getDni() {
        return dni;
    }

    public void setDni(int dni) {
        this.dni = dni;
    }
}
