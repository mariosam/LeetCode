/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumScore } from './MaximumScoreFromGridOperations.js'

TEST('Starting MaximumScoreFromGridOperations test...', (t) => {
    //Test 1
    let want = 11
    let got = maximumScore([[0,0,0,0,0],[0,0,3,0,0],[0,1,0,0,0],[5,0,0,3,0],[0,0,0,0,2]])
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 94
    got = maximumScore([[10,9,0,0,15],[7,1,0,8,0],[5,20,0,11,0],[0,0,0,1,2],[8,12,1,10,3]])
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
