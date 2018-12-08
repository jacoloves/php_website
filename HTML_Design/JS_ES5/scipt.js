function attack(item) {
    if(item === "手裏剣"){
        return "相手に大ダメージを与えた！";
    }

    return "相手にダメージを与えた";
}

console.log(attack("手裏剣"));