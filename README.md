NameCap
=======

Simple human name capitalization library for codeigniter

I thought someone might find this useful

#Usage
    $this->load->library('NameCap');
    echo $this->namecap->fixName('sheamus o\'malley');
    
Outputs: Sheamus O'Malley

    $this->load->library('NameCap');
    echo $this->namecap->fixName('sir john a. macdonald');
    
Outputs: Sir John A. MacDonald

Default delimiters for capitalization are ' mac mc - Mac Mc (

You can add your own by passing them to the constructor in an array:

    $params = array('Mac', 'Mc');
    $this->load->library('NameCap', $params);
    
