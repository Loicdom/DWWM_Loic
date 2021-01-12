<?php
class StatManager
{
    public static function add(Stat $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO stats (idStat,dateStat,minuteJouer,deuxPointTente,deuxPointMarque,troisPointTente,troisPointMarque,lancerFrancTente,lancerFrancMarque,rebondDef,rebondOff,passeDec,ballePerdue,interception,contreRealise,contreSubit,fautePerso,fauteProv,pointMarque,evaluation,idJoueur,idMatch) VALUES (:idStat,:dateStat,:minuteJouer,:deuxPointTente,:deuxPointMarque,:troisPointTente,:troisPointMarque,:lancerFrancTente,:lancerFrancMarque,:rebondDef,:rebondOff,:passeDec,:ballePerdue,:interception,:contreRealise,:contreSubit,:fautePerso,:fauteProv,:pointMarque,:evaluation,:idJoueur,:idMatch)");
        $q->bindValue(":idStat", $obj->getIdStat());
        $q->bindValue(":dateStat", $obj->getDateStat());
        $q->bindValue(":minuteJouer", $obj->getMinuteJouer());
        $q->bindValue(":deuxPointTente", $obj->getDeuxPointTente());
        $q->bindValue(":deuxPointMarque", $obj->getDeuxPointMarque());
        $q->bindValue(":troisPointTente", $obj->getTroisPointTente());
        $q->bindValue(":troisPointMarque", $obj->getTroisPointMarque());
        $q->bindValue(":lancerFrancTente", $obj->getLancerFrancTente());
        $q->bindValue(":lancerFrancMarque", $obj->getLancerFrancMarque());
        $q->bindValue(":rebondDef", $obj->getRebondDef());
        $q->bindValue(":rebondOff", $obj->getRebondOff());
        $q->bindValue(":passeDec", $obj->getPasseDec());
        $q->bindValue(":ballePerdue", $obj->getBallePerdue());
        $q->bindValue(":interception", $obj->getInterception());
        $q->bindValue(":contreRealise", $obj->getContreRealise());
        $q->bindValue(":contreSubit", $obj->getContreSubit());
        $q->bindValue(":fautePerso", $obj->getFautePerso());
        $q->bindValue(":fauteProv", $obj->getFauteProv());
        $q->bindValue(":pointMarque", $obj->getPointMarque());
        $q->bindValue(":evaluation", $obj->getEvaluation());
        $q->bindValue(":idJoueur", $obj->getIdJoueur());
        $q->bindValue(":idMatch", $obj->getIdMatch());
        $q->execute();
    }

    public static function update(Stat $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE stats SET  dateStat=:dateStat, minuteJouer=:minuteJouer, deuxPointTente=:deuxPointTente, deuxPointMarque=:deuxPointMarque, troisPointTente=:troisPointTente, troisPointMarque=:troisPointMarque, lancerFrancTente=:lancerFrancTente, lancerFrancMarque=:lancerFrancMarque, rebondDef=:rebondDef, rebondOff=:rebondOff, passeDec=:passeDec, ballePerdue=:ballePerdue, interception=:interception, contreRealise=:contreRealise, contreSubit=:contreSubit, fautePerso=:fautePerso, fauteProv=:fauteProv, pointMarque=:pointMarque, evaluation=:evaluation, idJoueur=:idJoueur, idMatch=:idMatch WHERE idStat=:idStat");
        $q->bindValue(":idStat", $obj->getIdStat());
        $q->bindValue(":dateStat", $obj->getDateStat());
        $q->bindValue(":minuteJouer", $obj->getMinuteJouer());
        $q->bindValue(":deuxPointTente", $obj->getDeuxPointTente());
        $q->bindValue(":deuxPointMarque", $obj->getDeuxPointMarque());
        $q->bindValue(":troisPointTente", $obj->getTroisPointTente());
        $q->bindValue(":troisPointMarque", $obj->getTroisPointMarque());
        $q->bindValue(":lancerFrancTente", $obj->getLancerFrancTente());
        $q->bindValue(":lancerFrancMarque", $obj->getLancerFrancMarque());
        $q->bindValue(":rebondDef", $obj->getRebondDef());
        $q->bindValue(":rebondOff", $obj->getRebondOff());
        $q->bindValue(":passeDec", $obj->getPasseDec());
        $q->bindValue(":ballePerdue", $obj->getBallePerdue());
        $q->bindValue(":interception", $obj->getInterception());
        $q->bindValue(":contreRealise", $obj->getContreRealise());
        $q->bindValue(":contreSubit", $obj->getContreSubit());
        $q->bindValue(":fautePerso", $obj->getFautePerso());
        $q->bindValue(":fauteProv", $obj->getFauteProv());
        $q->bindValue(":pointMarque", $obj->getPointMarque());
        $q->bindValue(":evaluation", $obj->getEvaluation());
        $q->bindValue(":idJoueur", $obj->getIdJoueur());
        $q->bindValue(":idMatch", $obj->getIdMatch());
        $q->execute();
    }

    public static function delete(stat $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM stats WHERE idStat=" . $obj->getIdStat());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM stats WHERE idStat=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Stat($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $stats = [];
        $q = $db->query("SELECT * FROM stats");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $stats[] = new Stat($donnees);
            }
        }
        return $stats;
    }

}
