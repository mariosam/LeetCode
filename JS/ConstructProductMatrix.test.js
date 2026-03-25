/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { constructProductMatrix } from './ConstructProductMatrix.js'

TEST('Starting ConstructProductMatrix test...', (t) => {
    //Test 1
    let want = [[24,12],[8,6]]
    let got = constructProductMatrix( [[1,2],[3,4]] )
    t.assert( want.toString() === got.toString(), "Expect: "+want)
    //Test 2
    want = [[2],[0],[0]]
    got = constructProductMatrix( [[12345],[2],[1]] )
    t.assert( want.toString() === got.toString(), "Expect: "+want)

    t.end()
})
