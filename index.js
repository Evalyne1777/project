
        const crypto = require("crypto"), SHA256 = message => crypto.createHash("sha256").update(message).digest("hex");

class Block {
    constructor(timestamp = "", data = []) {
        this.timestamp = timestamp;
        this.data = data;
        this.hash = this.getHash();
        this.prevHash = ""; // previous block's hash
        this.nonce = 0;
    }
    // Our hash function.
    getHash() {
        return SHA256(this.prevHash + this.timestamp + JSON.stringify(this.data));
    }
}
mine(difficulty) {
    while (!this.hash.startsWith(Array(difficulty + 1).join("0"))) {
        // We increases our nonce so that we can get a whole different hash.
        this.nonce++;
        // Update our new hash with the new nonce value.
        this.hash = this.getHash();
    }
}
class Blockchain {
    constructor() {
        // Create our genesis block
        this.chain = [new Block(Date.now().toString())];
        this.difficulty = 1;
        this.blockTime = 30000;
    }
}
getLastBlock() {
    return this.chain[this.chain.length - 1];
}

addBlock(block){
    block.prevHash = this.getLastBlock().hash;
    block.hash = block.getHash();
    block.mine(this.difficulty);
    this.chain.push(Object.freeze(block));
    this.difficulty += Date.now() - parseInt(this.getLastBlock().timestamp) < this.blockTime ? 1 : -1;
}
isValid(blockchain = this) {
    for (let i = 1; i < blockchain.chain.length; i++) {
        const currentBlock = blockchain.chain[i];
        const prevBlock = blockchain.chain[i-1];

        // Check validation
        if (currentBlock.hash !== currentBlock.getHash() || prevBlock.hash !== currentBlock.prevHash) {
            return false;
        }
    }

    return true;
}
module.exports = { Block, Blockchain };
const { Block, Blockchain } = require("./block.js");

const JeChain = new Blockchain();
// Add a new block
JeChain.addBlock(new Block(Date.now().toString(), { from: "John", to: "Bob", amount: 100 }));
console.log(JeChain.chain);