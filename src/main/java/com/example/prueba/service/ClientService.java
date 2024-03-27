package com.example.prueba.service;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import com.example.prueba.entity.Client;
import com.example.prueba.repository.ClientRepository;
import java.util.List;

@Service
public class ClientService {
    
    @Autowired
    private ClientRepository clientRepository;

    public List<Client> getAllClients() {
        return clientRepository.findAll();
    }

    public Client getClientById(Integer id) {
        return clientRepository.findById(id).orElse(null);
    }

    public Client saveClient(Client client) {
        return clientRepository.save(client);
    }

    public void deleteClient(Integer id) {
        clientRepository.deleteById(id);
    }
}
