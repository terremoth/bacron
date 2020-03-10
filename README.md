# bacron
Command line script em php que traduz para pt-br acrônimos comuns da internet (ex: wtf, brb, asap etc)
Necessário baixar o pacote BSDGames (nele contém todos os acrónimos mais usados (em torno de 600): 

debian/ubuntu/mint:
sudo apt install bsdgames -y

fedora/centOS:
sudo dnf install bsd-games -y

arch/manjaro:
sudo pacman -S bsd-games

exemplo:
$ php bacron.php brb
BRB: [Eu] já volto
