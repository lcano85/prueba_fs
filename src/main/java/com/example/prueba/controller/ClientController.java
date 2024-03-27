package com.example.prueba.controller;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import com.example.prueba.entity.Client;
import com.example.prueba.service.ClientService;

import java.util.List;

@RestController
@RequestMapping("/api/clients")
public class ClientController {
    
    @Autowired
    private ClientService clientService;

    @GetMapping
    public List<Client> getAllClients() {
        return clientService.getAllClients();
    }

    @GetMapping("/{id}")
    public Client getClientById(@PathVariable Integer id) {
        return clientService.getClientById(id);
    }

    @PostMapping
    public Client createClient(@RequestBody Client client) {
        return clientService.saveClient(client);
    }

    @PutMapping("/{id}")
    public Client updateClient(@PathVariable Long id, @RequestBody Client client) {
        if (!id.equals(client.getId())) {
            throw new IllegalArgumentException("ID mismatch");
        }
        return clientService.saveClient(client);
    }

    @DeleteMapping("/{id}")
    public void deleteClient(@PathVariable Integer id) {
        clientService.deleteClient(id);
    }
}
